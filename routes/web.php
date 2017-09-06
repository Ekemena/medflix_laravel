<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/greet', function () {
    return view('actions.greet');
})->name('greet');

Route::get('/hug', function () {
    return view('actions.hug');
})->name('hug');

Route::get('/kiss', function () {
    return view('actions.kiss');
})->name('kiss');
