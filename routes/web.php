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

Route::get('/pages', function () {
    return view('pages');
});

Route::get('/pages1', function () {
    return view('pages1');
});

Route::get('/pages2', function () {
    return view('pages2');
});
Route::get('/pages3', function () {
    return view('pages3');
});
