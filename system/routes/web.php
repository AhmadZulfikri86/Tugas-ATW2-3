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
    return view('welcome');
});

Route::get('/detailproduk1', function () {
    return view('detailproduk1');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/template', function () {
    return view('template.base');
});

Route::get('/chart', function () {
    return view('chart');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/login', function () {
    return view('login');
});
