<?php

namespace Swiftmade\Plausible;

use Illuminate\Support\ServiceProvider;

class PlausibleExcludeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'plausible');
    }
}
