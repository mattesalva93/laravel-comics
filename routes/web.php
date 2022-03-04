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

Route::get('/', function () {
    $array_fumetti = config('comics');
    $array_link = config('footerlink');
    return view('main-page', ['fumetti'=>$array_fumetti, 'linkfooter'=>$array_link]);
});
