<?php

namespace App\Providers;

use App\Repository\PostsRepository;
use App\Service\PostsService;
use App\Service\Impl\PostsServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {
        $this->app->bind(PostsService::class, PostsServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        //
    }
}
