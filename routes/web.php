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

// Route::get('/kelompok1', function () {
//     return view('carousel-news');
// });

// Route::get('/kelompok2', function () {
//     return view('dokumen');
// });

Route::get('/kelompok3', function () {
    return view('faq');
});
Route::get('/kelompok3-2', function () {
    return view('statistik');
});