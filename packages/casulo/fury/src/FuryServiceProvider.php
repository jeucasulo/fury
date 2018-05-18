<?php

namespace Casulo\Fury;

use Illuminate\Support\ServiceProvider;

class FuryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        
        // from -> to, de: para:
        $this->publishes([
            __DIR__.'/views' => resource_path('resources/views/Fury'),
        ],'fury');

        $this->publishes([
            __DIR__.'/assets' => public_path('fury-files'),
        ], 'fury');

        $this->publishes([
            __DIR__.'/assets/ajax-loader.gif' => public_path('img'),
        ], 'fury');



    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // this one works as well
        // include __DIR__.'/routes.php';
        
        // register our controller
        $this->app->make('Casulo\Fury\FuryController');

        $this->loadViewsFrom(__DIR__.'/views', 'fury');



    }
}
