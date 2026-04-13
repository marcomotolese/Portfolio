<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        $vercelUrl = env('VERCEL_URL');
        if (! env('APP_URL') && $vercelUrl) {
            $root = str_starts_with((string) $vercelUrl, 'http')
                ? $vercelUrl
                : 'https://'.$vercelUrl;
            config(['app.url' => $root]);
            URL::forceRootUrl($root);
        }

        if (env('APP_ENV') === 'production' && $vercelUrl) {
            URL::forceScheme('https');
        }
    }
}
