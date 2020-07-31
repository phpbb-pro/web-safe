<?php

use Symfony\Component\Filesystem\Filesystem;
use PHPMailer\PHPMailer\PHPMailer;

require('./vendor/autoload.php');

// in any case, tell Paypal it's OK
header("HTTP/1.1 200 OK");

if (empty($_POST))
{
	die;
}

require('./PaypalIPN.php');
$ipn = new PaypalIPN();
if (!empty($_POST['test_ipn']))
{
	$ipn->useSandbox();
}
if (!$ipn->verifyIPN())
{
	die;
}

$params = [];
foreach ($_POST as $key => $value) {
    $params[$key] = $value;
}
if (empty($_POST['test_ipn']) && $params['receiver_email'] !== getenv('LEGACY_PAYPAL_RECEIVER_EMAIL'))
{
	die;
}
if ($params['payment_status'] !== 'Completed')
{
	die;
}
if (empty($params['first_name']) || empty($params['last_name']) || empty($params['custom']) || empty($params['payer_email']))
{
	die;
}

$update = false;
$license = $params['custom'];
if ($params['custom'] === '1.1.x-1.2.0')
{
	if (!in_array($params['payer_email'], array_filter(array_map('trim', explode(',', getenv('LEGACY_UPDATE_CUSTOMERS') ?: ''))), true)) {
		die;
	}

	$update = true;
	$license = 'standard';
}

// prepare zip
$filesystem = new Filesystem();
try
{
	// prepare new directory
	$filesystem->remove('pushnotifications');
	$filesystem->remove('pn.zip');
	$filesystem->mirror('phpbbpn', 'pushnotifications');

	// add licensee and remove dev files
	$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('pushnotifications'));
	foreach ($rii as $file)
	{
		if ($file->isDir())
		{
			continue;
		}

		// remove CSS dev files
		if (strpos($file->getPathname(), '.css') !== false && strpos($file->getPathname(), '.min.css') === false && strpos($file->getPathname(), 'readme_assets') === false)
		{
			$filesystem->remove($file->getPathname());
			continue;
		}

		// remove JS dev files
		if (substr($file->getPathname(), -3) == '.js' && strpos($file->getPathname(), '.min.js') === false)
		{
			$filesystem->remove($file->getPathname());
			continue;
		}

		// replace {{LICENSEE}} placeholder for real name
		$contents = file_get_contents($file->getPathname());
		$contents = str_replace('{{LICENSEE}}', $params['first_name'] . ' ' . $params['last_name'], $contents);
		file_put_contents($file->getPathname(), $contents);
	}

	// copy license
	copy('https://senky.github.io/pushnotifications/' . $license . '-license.txt', 'pushnotifications/' . $license . '-license.txt');

	// pack it
	Zip('pushnotifications', 'pn.zip');

	// remove temporary dir
	$filesystem->remove('pushnotifications');
}
catch (Exception $e)
{
	die;
}

// upload zip to dropbox
try
{
	$args = [
		'path'				=> '/pushnotifications_' . $params['first_name'] . '_' . $params['last_name'] . '_' . time() . '.zip',
		'mode'				=> 'add',
		'autorename'		=> true,
		'mute'				=> false,
		'strict_conflict'	=> false,
	];
	$client = new \GuzzleHttp\Client();
	$response = $client->post('https://content.dropboxapi.com/2/files/upload', [
		'headers'	=> [
			'Authorization'		=> 'Bearer ' . getenv('LEGACY_DROPBOX_ACCESS_TOKEN'),
			'Dropbox-API-Arg'	=> json_encode($args),
			'Content-Type'		=> 'application/octet-stream',
		],
		'body'		=> fopen('pn.zip', 'r'),
	]);

	if ($response->getStatusCode())
	{
		$res = json_decode($response->getBody(), true);
		$args = [
			'path'	=> $res['path_lower'],
			'settings'	=> [
				'requested_visibility'	=> 'public',
			],
		];
		$client = new \GuzzleHttp\Client();
		$response = $client->post('https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings', [
			'headers'	=> [
				'Authorization'		=> 'Bearer ' . getenv('LEGACY_DROPBOX_ACCESS_TOKEN'),
				'Content-Type'		=> 'application/json',
			],
			'body'		=> json_encode($args),
		]);

		if ($response->getStatusCode())
		{
			$url = json_decode($response->getBody(), true)['url'];
			$url = substr($url, 0, -1) . '1';
		}
	}
}
catch (Exception $e)
{
}

if (empty($url))
{
	die;
}

// send mail
$mail = new PHPMailer(true);
try
{
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = getenv('LEGACY_SMTP_USERNAME');
	$mail->Password = getenv('LEGACY_SMTP_PASSWORD');
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	
	$mail->setFrom(getenv('LEGACY_MAIL_FROM_ADDRESS'), 'Jakub Senko');
	$mail->addAddress($params['payer_email']);
	if (getenv('LEGACY_MAIL_BCC')) { $mail->addBCC(getenv('LEGACY_MAIL_BCC')); }

	$mail->Subject = 'phpBB | Browser and Mobile Notifications - ' . ($update ? 'Update' : ucfirst($license) . ' License');

	$mail->Body = "Hello " . $params['first_name'] . ",
thank you for purchasing my Browser and Mobile Notifications extension. You can find your licensed version here:

$url

I hope you will find it easy to install and your users easy to use. Let me know if you encounter any issues, I will be happy to help you through this email communication.

Have a nice day!

PS: Check out my other excellent extension:
Mixed Content Fixer: https://phpbb.pro/httpproxy/

Best regards,
Jakub Senko";
	if ($update)
	{
		$mail->Body = "Hello " . $params['first_name'] . ",
thank you for purchasing an update of Browser and Mobile Notifications extension. You can find your updated version here:

$url

I hope you will find it easy to update and your users pleasant to use. Let me know if you encounter any issues, I will be happy to help you through this email communication.

In case you need help with updating, you can find simple instructions here:
https://www.phpbb.com/extensions/installing/#updating

Have a nice day!

Best regards,
Jakub Senko";
	}

	$mail->send();
}
catch (Exception $e)
{
}

file_put_contents('user-data.txt', date('j.n.Y') . ' - ' . $params['first_name'] . ', ' . $params['last_name'] . ' (' . ($params['address_country_code'] ?? '??' ) . ') - ' . $params['custom'] . "\n", FILE_APPEND);

$filesystem->remove('pn.zip');


function Zip($source, $destination)
{
    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }

    $source = str_replace('\\', '/', realpath($source));

    if (is_dir($source) === true)
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($files as $file)
        {
            $file = str_replace('\\', '/', $file);

            // Ignore "." and ".." folders
            if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                continue;

            $file = realpath($file);

            if (is_dir($file) === true)
            {
                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            }
            else if (is_file($file) === true)
            {
                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
        }
    }
    else if (is_file($source) === true)
    {
        $zip->addFromString(basename($source), file_get_contents($source));
    }

    return $zip->close();
}
