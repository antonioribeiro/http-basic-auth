<?php

namespace A17\HttpBasicAuth\Services;

use Closure;

class HttpBasicAuth
{
    public function checkAuth()
    {
        abort(401);
    }

    public function handle($request, Closure $next, $username = null, $password = null)
    {
        if (config('auth.http.activated', false)
            && !$this->inExceptArray($request)) {
            $authUsername = (empty($username)) ? config('auth.http.user') : $username;
            $authPassword = (empty($password)) ? config('auth.http.password') : $password;

            if ($request->getUser() !== $authUsername || $request->getPassword() !== $authPassword) {
                $header = ['WWW-Authenticate' => 'Basic realm="Basic Auth", charset="UTF-8"'];

                if ($request->wantsJson()) {
                    return response()->json([
                        'message' => "401 Authorization Required"
                    ], 401, $header);
                }

                return response("401 Authorization Required", 401, $header);
            }
        }
        return $next($request);
    }
}
