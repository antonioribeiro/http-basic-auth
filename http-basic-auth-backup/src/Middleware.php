<?php

namespace A17\HttpBasicAuth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class Middleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = HttpBasicAuth::checkAuth($request);

        if ($response !== null) {
            return $response;
        }

        return $next($request);
    }
}
