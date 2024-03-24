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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kuisioner', function () {
    return view('kuisioner');
});

Route::get('/informasi-lowongan', function () {
    return view('informasi-lowongan');
});

Route::get('/informasi-jobfair', function () {
    return view('informasi-jobfair');
});


Route::get('/prestasi', function () {
    return view('prestasi');
});


Route::get('/testimoni', function () {
    return view('testimoni');
});