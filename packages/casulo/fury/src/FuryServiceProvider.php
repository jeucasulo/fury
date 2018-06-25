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
            // __DIR__.'/views' => resource_path('views/Fury/'),
            // __DIR__.'/views' => base_path('resources/views/Fury/'),
            base_path('resources/views/Fury/') => base_path('resources/views/Fury/'),
            public_path('js') => public_path('js'),
            public_path('CSS') => public_path('CSS'),
            public_path('img/ajax-loader.gif') => public_path('img/ajax-loader.gif'),
            public_path('bootstrap-4.0.0-dist') => public_path('bootstrap-4.0.0-dist'),
            public_path('fury-files') => public_path('fury-files'),
            


        ],'fury');

        // ok
        // $this->publishes([
        //     __DIR__.'/assets/js' => public_path('js'),
        // ], 'fury');
        
        // // ok        
        // $this->publishes([
        //     __DIR__.'/assets/css' => public_path('css'),
        // ], 'fury');
        // // ok
        // $this->publishes([
        //     __DIR__.'/assets/ajax-loader.gif' => public_path('img/ajax-loader.gif'),
        // ], 'fury');

        // // ok
        // $this->publishes([
        //     __DIR__.'/assets/bootstrap-4.0.0-dist' => public_path('bootstrap-4.0.0-dist'),
        // ], 'fury');

        // // ok
        // $this->publishes([
        //     __DIR__.'/assets/fury-files' => public_path('fury-files'),
        // ], 'fury');



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

        // $this->loadViewsFrom(__DIR__.'/views', 'fury');



    }
}
