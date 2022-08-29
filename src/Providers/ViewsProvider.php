<?php

namespace Alaa\DLS\Providers;

use Illuminate\Support\ServiceProvider;

class ViewsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../public' => public_path(''),
        ], 'public');
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views'),
        ], 'views');
        $this->loadViewsFrom(__DIR__ . '/../views', 'dls');
    }
}
