<?php

namespace Sandeepchowdary7\Laratriposo;

use Illuminate\Support\ServiceProvider;
use Sandeepchowdary7\Laratriposo\Triposo;

class LaratriposoServiceProvider extends ServiceProvider 
    {
        public function register()
        {
            $this->app->singleton('triposo', function($app) {
                return new Triposo();
            });
        }

        public function boot()
        {
            $this->publishes([
                __DIR__ . '/config/triposo.php' => config_path('triposo.php'),
            ]);
            $this->mergeConfigFrom(
                __DIR__ . '/config/triposo.php', 'triposo'
            );
        }

        public function provides()
        {
            return [
                'Triposo',
            ];
        }
}