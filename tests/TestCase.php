<?php

namespace A17\HttpBasicAuth\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use A17\HttpBasicAuth\ServiceProvider as HttpBasicAuthServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [HttpBasicAuthServiceProvider::class];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
