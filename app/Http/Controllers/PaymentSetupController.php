<?php

namespace App\Http\Controllers;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class PaymentSetupController extends Controller
{
    private $client;

    public function __construct()
    {
        $config = \Config::get('paypal');
        $envClass = $this->getEnvClass($config['mode']);
        
        $this->client = new PayPalHttpClient(new $envClass($config['client_id'], $config['secret']));
    }

    public function payWithpaypal($ext, $package) {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');

        // load currency and price
        try {
            list($currency, $price) = price($ext, $package, true);
        } catch (\Exception $e) {
            return abort(404);
        }

        // generate item name
        $info = require resource_path("data/$ext/info.php");
        $name = $info['name'] . ' - ' . $info['packages'][$package];

        $request->body = $this->buildRequestBody($ext, $currency, $price, $name);

        $response = $this->client->execute($request);
        return redirect($response->result->links[1]->href);
    }

    protected function getEnvClass($env) {
        return $env == 'sandbox' ? '\PayPalCheckoutSdk\Core\SandboxEnvironment' : 'PayPalCheckoutSdk\Core\ProductionEnvironment';
    }

    protected function buildRequestBody($ext, $currency, $price, $name) {
        return [
            'intent' => 'CAPTURE',
            'application_context' => [
                'brand_name'    => 'phpbb.pro',
                'return_url'    => "http://localhost:3000/$ext/success",
                'cancel_url'    => "http://localhost:3000/$ext/cancel",
                'user_action' => 'PAY_NOW',
                'landing_page' => 'BILLING',
                'shipping_preference'   => 'NO_SHIPPING',
            ],
            'purchase_units' => [
                [
                    'amount'    => [
                        'currency_code' => $currency,
                        'value'         => $price,
                        'breakdown'     => [
                            'item_total'    => [
                                'currency_code' => $currency,
                                'value'         => $price,
                            ]
                        ]
                    ],
                    'items' => [
                        [
                            'name'  => $name,
                            'unit_amount'   => [
                                'currency_code' => $currency,
                                'value'         => $price,
                            ],
                            'quantity'  => '1',
                        ]
                    ]
                ]
            ]
        ];
    }
}
