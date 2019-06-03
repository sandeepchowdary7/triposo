<?php

namespace Sandeepchowdary7\Laratriposo\Provider;

use Illuminate\Support\ServiceProvider;
use Sandeepchowdary7\Laratriposo\Triposo;

class LaratriposoServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->singleton('laratriposo', function($app) {
            return new Triposo(config('services.triposo'));
        });
    }
}