<?php

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
    return view('welcome');
});

Route::get('/helo', function () {
    return ('Hello Worasasa!!');
});

Route::get('/welcome', function () {
echo "Welcome";
}); 


Route::get('/show/{id}', function ($id) {
echo "Nilai Parameter Adalah ".$id;
});