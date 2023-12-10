<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/jurusan', function () {
    return view('jurusan');
});
Route::get('/kontak-kami', function () {
    return view('kontak-kami');
});
Route::get('/development', function () {
    return view('development');
});
Route::get('/pembayaran-du', function () {
    return view('pembayaran-du');
});
Route::get('/timeline', function () {
    return view('timeline');
});
