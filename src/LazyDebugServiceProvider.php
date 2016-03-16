<?php

namespace Metrakit\LazyDebug;

use Illuminate\Support\ServiceProvider;

class LazyDebugServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->singleton(
            'Illuminate\Contracts\Debug\ExceptionHandler',
            'Metrakit\LazyDebug\ExceptionHandler'
        );
    }
}
