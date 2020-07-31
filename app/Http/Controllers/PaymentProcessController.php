<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

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

    public function process($ext)
    {
        $request = new OrdersCaptureRequest($this->request->input('token'));
        $response = $this->client->execute($request);
        dd($response);

        return view("$ext.success");
    }

    protected function getEnvClass($env) {
        return $env == 'sandbox' ? '\PayPalCheckoutSdk\Core\SandboxEnvironment' : 'PayPalCheckoutSdk\Core\ProductionEnvironment';
    }
}
