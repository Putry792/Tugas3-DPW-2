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

Route::get('/template', function () {
    return view('template.base');
});

Route::get('/barang', function () {
    return view('barang');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/detail', function () {
    return view('detail-product');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/admin-login', function () {
    return view('admin-login');
});