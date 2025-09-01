<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Allow overriding the public path via environment variable (useful for shared hosting)
        $publicPath = env('APP_PUBLIC_PATH');
        if (!empty($publicPath)) {
            $this->app->bind('path.public', function () use ($publicPath) {
                return $publicPath;
            });
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
