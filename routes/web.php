<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


foreach (glob('../resources/views/*/pages/*.blade.php') as $file) {
    $pathinfo = pathinfo($file);
    $ext = str_replace(['../resources/views/', '/pages'], '', $pathinfo['dirname']);
    $path = substr($pathinfo['filename'], 0, -6);

    $route = $path === 'index' ? '' : $path;

    // register route
    Route::get("/$ext/$route", function() use ($ext, $path) {
        return view("$ext.pages.$path");
    })->name("$ext/$route");
}

Route::get('/pay/{ext}/{package}', 'PaymentController@payWithpaypal')->name('pay');
