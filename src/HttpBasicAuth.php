<?php

namespace A17\HttpBasicAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use A17\HttpBasicAuth\Services\HttpBasicAuth as HttpBasicAuthService;

/**
 * @method static HttpBasicAuthService instance()
 * @method static HttpBasicAuthService setRequest(Request $request)
 * @method static Request getRequest()
 * @method static bool enabled()
 * @method static HttpBasicAuthService setConfig()
 **/
class HttpBasicAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'a17.http-basic-auth.service';
    }
}
