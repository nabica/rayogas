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
    return view('home');
});
Route::get('/glp', function () {
    return view('glp');
});
Route::get('/blog/list', function () {
    return view('blog-list');
});
Route::get('/blog/intern', function () {
    return view('blog');
});