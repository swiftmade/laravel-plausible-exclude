<?php

namespace Swiftmade\Plausible\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Swiftmade\Plausible\PlausibleExcludeServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            PlausibleExcludeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
