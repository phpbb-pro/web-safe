<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalHttp\HttpRequest;
use Illuminate\Support\Facades\Mail;
use App\Packers\FormsPacker;
use App\Mail\Purchase;

class PaymentProcessController extends Controller
{
    protected $request;
    private $client;
    public function __construct(Request $request)
    {
        $config = \Config::get('paypal');
        $envClass = $this->getEnvClass($config['mode']);

        $this->request = $request;
        $this->client = new PayPalHttpClient(new $envClass($config['client_id'], $config['secret']));
    }

    public function process()
    {
        // discard early when request doesn't include what we need
        if ($this->request->input('event_type') != 'CHECKOUT.ORDER.APPROVED') {
            abort(401);
        }

        // verify webhook
        $request = new HttpRequest('/v1/notifications/verify-webhook-signature', 'POST');
        $request->headers = ['Content-Type' => 'application/json'];
        $request->body = [
            'auth_algo' => $this->request->header('PAYPAL-AUTH-ALGO'),
            'cert_url' => $this->request->header('PAYPAL-CERT-URL'),
            'transmission_id' => $this->request->header('PAYPAL-TRANSMISSION-ID'),
            'transmission_sig' => $this->request->header('PAYPAL-TRANSMISSION-SIG'),
            'transmission_time' => $this->request->header('PAYPAL-TRANSMISSION-TIME'),
            'webhook_id'    => env('PAYPAL_WEBHOOK_ID'),
            'webhook_event' => $this->request->all(),
        ];
        $response = $this->client->execute($request);
        if ($response->result->verification_status != 'SUCCESS') {
            abort(401);
        }

        // capture (claim) order
        $request = new OrdersCaptureRequest($this->request->input('resource.id'));
        $response = $this->client->execute($request);

        // send ext over to the buyer
        if ($response->result->status == 'COMPLETED') {
            $packer = new FormsPacker;
            $zip_name = $packer->pack('basic', $response->result->payer->name->given_name . ' ' . $response->result->payer->name->surname);

            Mail::to($response->result->payer->email_address)
                ->bcc('private-013@example.invalid')
                ->send(new Purchase($response->result->payer->name->given_name, $zip_name));

            // $response->result->payer->address->country_code
        }

        return response('', 200);
    }

    protected function getEnvClass($env) {
        return $env == 'sandbox' ? '\PayPalCheckoutSdk\Core\SandboxEnvironment' : 'PayPalCheckoutSdk\Core\ProductionEnvironment';
    }
}
