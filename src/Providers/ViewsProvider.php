<?php

namespace Yodawyy\DLS\Providers;

use Illuminate\Support\ServiceProvider;

class ViewsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'dls');
    }
}
