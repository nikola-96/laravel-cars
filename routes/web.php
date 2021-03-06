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
    $about = [ 'name' => 'Nikola', 'age' => 23];
    return view('welcome', compact('about'));
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/views', 'CarsController@index');

Route::get('/viewCar/{id}', 'CarsController@show');



