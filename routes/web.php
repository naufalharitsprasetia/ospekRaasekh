<?php

use App\Models\Faq;
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
Route::get('/lainnya', function () {
    return view('lain-lain');
});
Route::get('/ukm', function () {
    return view('ukm');
});
Route::get('/ukm-putri', function () {
    return view('ukm-putri');
});
Route::get('/persiapan-barang', function () {
    return view('persiapan-barang');
});
Route::get('/profil-unida', function () {
    return view('profil-unida');
});
Route::get('/seragam-unida', function () {
    return view('seragam-unida');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/struktur', function () {
    return view('struktur');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/faq', function () {
    $faqs = Faq::all();
    return view('faq', [
        'faqs' => $faqs
    ]);
});