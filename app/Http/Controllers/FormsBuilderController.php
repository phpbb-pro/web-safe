<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsBuilderController extends Controller
{
    public function render(Request $request)
    {
        $client = \App\Client::where('uuid', $request->input('key'))->first();
        if (!$client->exists()) {
            abort(401);
        }

        $track = new \App\FormsBuilderTracker;
        $track->client_id = $client->id;
        $track->host = $request->getHttpHost();
        $track->referer = $request->server('HTTP_REFERER');
        $track->save();

        return response(file_get_contents(storage_path('app/form-builder.js')))
                ->header('Content-Type', 'text/javascript');
    }
}
