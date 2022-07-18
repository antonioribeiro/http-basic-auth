<?php

namespace A17\Localization\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use A17\Localization\ServiceProvider as LocalizationServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [LocalizationServiceProvider::class];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
