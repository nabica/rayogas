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


//Acceder desde el navegador asi http://mps.local/lotus
Route::prefix('lotus')->group(function () {
    Route::view('login', 'admin.auth.login')->name('login');
    /*Route::middleware(['guest'])->group(function () {
        Route::view('login', 'auth.login')->name('login');
    });*/
    Route::post('login', [LoginController::class, 'index'])->name('auth.login');
    Route::post('logout', [LogoutController::class, 'index'])->name('auth.logout');

});
