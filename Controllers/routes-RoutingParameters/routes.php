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


// Routing Parameters
Route::get('agefilterreq/{max}/{min}', function ($max,$min) {           // Required parameter 
    echo "max:".$max."min:".$min  ; 
});

Route::get('agefilteropt/{max}/{min?}', function ($max,$min='5') {           // Optional parameter 
    echo "max:".$max."min:".$min  ; 
});


Route::get('/', function () {
    return view('welcome');
});
