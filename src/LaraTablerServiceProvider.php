<?php

namespace Piro\LaraTabler;

use Illuminate\Support\ServiceProvider;

class LaraTablerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../bootstrap' => public_path() . '/LaraTabler',
            __DIR__.'/../resources' => resource_path() . '/views/LaraTabler',
        ], 'LaraTabler');
    }
}
