<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rayogas Routes
|--------------------------------------------------------------------------
*/

Route::namespace("App\Http\Controllers\Rayogas")->group(function () {
    Route::get("/", "HomeController@index")->name('rayogas.home');
    Route::get("/nosotros", "AboutController@index")->name('rayogas.about');
    Route::get("/productos-y-servicios", "ProductsController@index")->name('rayogas.products');
    Route::get("/glp", "GlpController@index")->name('rayogas.glp');
    Route::get("/blog", "BlogController@index")->name('rayogas.blog');
    Route::get("/blog/show", "BlogController@show")->name('rayogas.blog.show');
    Route::get("/pqrs", "PqrsController@index")->name('rayogas.pqrs');
    Route::get("pqrs/thanks", "PqrsController@tanks")->name('rayogas.thanks');
});