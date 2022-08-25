<?php

namespace Yodawyy\DLS\Providers;

use Illuminate\Support\ServiceProvider;

class ViewsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'dls');
        $this->publishes([
            __DIR__ . '/../public/css/app.css' => public_path('vendor/css/app.css'),
            __DIR__ . '/../public/css/theme.css' => public_path('vendor/css/theme.css'),
        ], 'public');
    }
}
