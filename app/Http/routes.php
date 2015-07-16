<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    return View::make('home');
});

Route::get('akomodasi/{jenis}','AkomodasiController@view');

Route::get('destinasi/{jenis}','DestinasiController@view');

Route::get('acara-dan-atraksi','AcaraController@view');
