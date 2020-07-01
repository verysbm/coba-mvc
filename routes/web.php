<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    return view('index');
});
Route::get('/register', function () {
    return view('form');
});
Route::get('welcome/{nama}', function ($nama) {
    return view('welcome', $nama);
});

Route::get('/home', 'HomeController@home');
Route::get('/selamat', 'AuthController@selamat');
Route::post('/selamat', 'AuthController@selamat_post');
