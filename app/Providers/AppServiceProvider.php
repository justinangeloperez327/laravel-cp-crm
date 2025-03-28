<?php

namespace App\Providers;

use App\Services\Xero\Contracts\XeroServiceInterface;
use App\Services\Xero\XeroService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(XeroServiceInterface::class, XeroService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
