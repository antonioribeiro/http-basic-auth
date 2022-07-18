<?php

namespace A17\HttpBasicAuth\Tests;

use A17\HttpBasicAuth\HttpBasicAuth;
use A17\HttpBasicAuth\CacheControl;
use A17\HttpBasicAuth\ServiceProvider;
use A17\HttpBasicAuth\Support\Constants;

class HttpBasicAuth extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        config(['http-basic-auth.enabled' => true]);
    }
}
