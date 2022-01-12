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
    return view('rayogas.home');
});

Route::get('/nosotros', function () {
    return view('rayogas.about');
});

Route::get('/productos-y-servicios', function () {
    return view('rayogas.products');
});

Route::get('/glp', function () {
    return view('rayogas.glp');
});
Route::get('/blog/list', function () {
    return view('rayogas.blog-list');
});
Route::get('/blog/intern', function () {
    return view('rayogas.blog');
});
Route::get('/pqrs', function () {
    return view('rayogas.pqrs');
});
