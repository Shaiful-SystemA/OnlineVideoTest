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



Route::get('/sidebar', function () {
    return view('sidebar');
});


Route::get('/sidebar/AngularLab1', function () {
    return view('AngularLab1');
});




Route::get('/full-width.html', function () {
    return view('full-width');
});


Route::get('/pricing', function () {
    return view('pricing');
});





Route::group(['middleware' => ['web']], function (){

    Route::get('/', function () {
        return view('welcome');
    })->name('home');


    Route::get('/Login', function () {
        return view('LoginPage');
    });


    Route::post('/signup',[
        'uses' => 'UserController@postSignup',
        'as'=> 'signup'
    ]);

    Route::post('/signin',[
        'uses' => 'UserController@postSignin',
        'as'=> 'signin'
    ]);


    Route::get('/dashboard',[
        'uses' => 'UserController@getDashBoard',
        'as'=> 'dashboard',
        'middleware' => 'auth'
    ]);



});
