<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Blog\BlogPost;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        //Blog Highlights
        View::composer(['rayogas.components.blog-highlights'], function ($view) {
            $view->with('randomBlogPosts', BlogPost::latest()->limit(3)->get());
           /* $view->with('randomBlogPosts', BlogPost::inRandomOrder()->limit(3)->get());*/
        });
    }
}
