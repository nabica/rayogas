<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

//Acceder desde el navegador asi http://rayogas.test/lotus
Route::prefix('lotus')->group(function () {
    Route::namespace("App\Http\Controllers\Admin")->group(function () {
        // Authentication
        Route::middleware(['GuestAdminUser'])->group(function () {
            Route::view('login', 'admin.auth.login')->name('admin.login');
        });

        Route::post('login', 'LoginController@index')
            ->name('admin.auth.login');

        Route::post('logout', 'LogoutController@index')
            ->name('admin.auth.logout');

        // Por hacer: Verificar que solo puedan ingresar usuarios de tipo administrador
        Route::middleware(['CheckAdminUserAuth'])->group(function () {
            Route::view('/', 'admin.welcome')->name('admin.welcome');

            // Home
            Route::resource('/home/banner', 'Home\HomeBannerController', ['as' => 'admin.home'])->only(['edit', 'update']);

            Route::resource('/home/feature', 'Home\HomeFeatureController', ['as' => 'admin.home'])->only(['edit', 'update']);

            Route::resource('/home/rates', 'Home\HomeRateController', ['as' => 'admin.home']);

            Route::resource('/home/floating-bar', 'Home\HomeFloatingBarController', ['as' => 'admin.home'])->only(['edit', 'update']);

            // About
            Route::resource('/about/banner', 'About\AboutBannerController', ['as' => 'admin.about'])->only(['edit', 'update']);

            Route::resource('/about/features', 'About\AboutFeatureController', ['as' => 'admin.about'])->only(['index', 'edit', 'update']);

            Route::resource('/about/values', 'About\AboutValueController', ['as' => 'admin.about']);

            Route::resource('/about/why-choose-features', 'About\AboutWhyChooseFeatureController', ['as' => 'admin.about'])->only(['index', 'edit', 'update']);

            // Products
            Route::resource('/products/banner', 'Products\ProductsBannerController', ['as' => 'admin.products'])->only(['edit', 'update']);

            Route::resource('/products/wapp-buttons', 'Products\ProductsWappButtonController', ['as' => 'admin.products'])->only(['edit', 'update']);

            // Glp
            Route::resource('/glp/banner', 'Glp\GlpBannerController', ['as' => 'admin.glp'])->only(['edit', 'update']);

            Route::resource('/glp/recommendation-tips', 'Glp\GlpRecommendationTipController', ['as' => 'admin.glp'])->only(['index', 'edit', 'update']);

            Route::resource('/glp/recommendation-pdfs', 'Glp\GlpRecommendationPdfController', ['as' => 'admin.glp']);

            Route::resource('/glp/faqs', 'Glp\GlpFaqController', ['as' => 'admin.glp']);

            // Pqrs
            Route::resource('/pqrs/objects', 'Pqrs\PqrsObjectController', ['as' => 'admin.pqrs']);

            // News
            Route::resource('/news/banner', 'News\NewsBannerController', ['as' => 'admin.news'])->only(['edit', 'update']);

            Route::resource('/news/posts', 'News\NewsPostController', ['as' => 'admin.news']);
            //Blog
            Route::resource('/blog/banner', 'Blog\BlogBannerController', ['as' => 'admin.blog'])->only(['edit', 'update']);
            Route::resource('/blog/posts', 'Blog\BlogPostController', ['as' => 'admin.blog']);
        });
    });
});

/*
|--------------------------------------------------------------------------
| Rayogas Routes
|--------------------------------------------------------------------------
*/

Route::namespace("App\Http\Controllers\Rayogas")->group(function () {
    Route::get("/", "HomeController@index")->name('rayogas.home');
    Route::post("/solicitud-servicio", "HomeController@serviceRequest");

    Route::get("/nosotros", "AboutController@index")->name('rayogas.about');
    Route::get("/productos-y-servicios", "ProductsController@index")->name('rayogas.products');
    Route::get("/glp", "GlpController@index")->name('rayogas.glp');
    Route::get("/blog", "BlogController@index")->name('rayogas.blog');
    Route::get("/noticias", "NewsController@index")->name('rayogas.news-list');
    /* Route::get("/blog/{slug}", "BlogController@show")->name('rayogas.blog.show'); */
    Route::get("/pqrs", "PqrsController@index")->name('rayogas.pqrs');
    Route::post("/pqrs", "PqrsController@store");
    Route::get("pqrs/gracias", "PqrsController@tanks")->name('rayogas.thanks');

    Route::get('/transparencia', 'TransparencyController@index')->name('rayogas.transparency');
    Route::get('/tarifas', 'RatesController@index')->name('rayogas.rates');
    Route::get("/trabaja-con-nosotros", "WorkWithUsController@index")->name('rayogas.work-with-us');
    Route::post("/trabaja-con-nosotros", "WorkWithUsController@store");
    Route::get("/terminosycondiciones", "TermsController@index")->name('rayogas.terms');
    Route::get("/catalogo", "CatalogController@index")->name('rayogas.catalog');
});
