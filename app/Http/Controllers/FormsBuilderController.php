<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsBuilderController extends Controller
{
    public function render(Request $request)
    {
        $client = \App\Client::where('uuid', $request->input('key'));
        if (!$client->exists()) {
            abort(401);
        }

        $client = new \App\FormsBuilderTracker;
        $client->client_id = $client->id;
        $client->host = $request->getHttpHost();
        $client->referer = $request->server('HTTP_REFERER');
        $client->save();

        return response(file_get_contents(storage_path('app/form-builder.js')))
                ->header('Content-Type', 'text/javascript');
    }
}
