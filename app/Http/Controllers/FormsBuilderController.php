<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsBuilderController extends Controller
{
    public function render(Request $request)
    {
        if (!\App\Client::where('uuid', $request->input('key'))->exists()) {
            abort(401);
        }

        return response(file_get_contents(storage_path('app/form-builder.js')))
                ->header('Content-Type', 'text/javascript');
    }
}
