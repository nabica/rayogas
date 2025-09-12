<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\FloatingBarComposer;
use App\View\Composers\RandomBlogPostComposer;
use App\Services\HtmlSanitizerService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HtmlSanitizerService::class, function ($app) {
            return new HtmlSanitizerService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        // Blog Highlights
        View::composer(['rayogas.components.blog-highlights'], RandomBlogPostComposer::class);

        // Floating bar
        View::composer([
            'rayogas.components.contact-bar',
            'rayogas.components.payment-modal',
        ], FloatingBarComposer::class);
    }
}
