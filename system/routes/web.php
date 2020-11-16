<?php

use Illuminate\Support\Facades\Route;
use App\ Http\Controllers\HomeController;
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

Route::get('/detailproduk1', [HomeController::class, 'showdetailproduk1']);
Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/register', [HomeController::class, 'showregister']);
Route::get('/produk', [HomeController::class, 'showproduk']);
Route::get('/kontak', [HomeController::class, 'showkontak']);
Route::get('/checkout', [HomeController::class, 'showcheckout']);
Route::get('/template', [HomeController::class, 'showtemplate']);
Route::get('/chart', [HomeController::class, 'showchart']);
Route::get('/tabel', [HomeController::class, 'showtabel']);
Route::get('/form', [HomeController::class, 'showform']);
Route::get('/kalender', [HomeController::class, 'showkalender']);
Route::get('/login', [HomeController::class, 'showlogin']);

