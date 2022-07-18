<?php

namespace A17\HttpBasicAuth;

use A17\HttpBasicAuth\Services\HttpBasicAuth;
use A17\HttpBasicAuth\HttpBasicAuth as HttpBasicAuthFacade;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    protected array $config;

    public function boot(): void
    {
        $this->publishConfig();
    }

    public function register(): void
    {
        $this->mergeConfig();

        $this->configureContainer();
    }

    public function publishConfig(): void
    {
        $this->publishes(
            [
                __DIR__ . '/../config/http-basic-auth.php' => config_path('http-basic-auth.php'),
            ],
            'config',
        );

        $this->config = config('http-basic-auth');
    }

    protected function mergeConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/http-basic-auth.php', 'http-basic-auth');
    }

    public function configureContainer(): void
    {
        $this->app->singleton('a17.http-basic-auth.service', function ($app) {
            return (new HttpBasicAuth())->setConfig($this->config);
        });
    }
}
