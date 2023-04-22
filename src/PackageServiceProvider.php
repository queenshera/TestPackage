<?php

namespace Ashish\MyPackage;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class PackageServiceProvider extends RouteServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','ashish');

    }
}
