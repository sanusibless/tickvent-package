<?php

namespace Tickvent\Streaming;

use Illuminate\Support\ServiceProvider;

class TickventStreamingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // dd("I finally got it");
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadRoutesFrom((__DIR__.'/routes/web.php'));

        $this->loadViewsFrom(__DIR__.'/resources/views', 'tickvent');
    }
}
