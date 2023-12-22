<?php

namespace App\Providers;

use App\View\Composers\HeaderComposer;
use App\View\Composers\SidebarPostComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        View::composer(['layouts.guest.article-sidebar'], SidebarPostComposer::class);
        View::composer(['layouts.guest.header'], HeaderComposer::class);
    }
}
