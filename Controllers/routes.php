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

Route::get('showhello', 'Hellocontroller@index');
Route::get('showuser/{uname}', 'Hellocontroller@index');     // passing Parameters

Route::get('showhello', function () {            // closure function or loading view
    return view('index');
});

Route::get('showage/{age}', function ($age) {            // passing parameter using closure function 
    echo $age;
})->where(['age'=>'[0-9]+']);

Route::get('/', function () {
    return view('welcome');
});
