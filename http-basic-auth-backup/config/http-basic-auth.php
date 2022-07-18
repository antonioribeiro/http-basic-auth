<?php

return [
    /**
     * Enable/disable the package
     */
    'enabled' => env('HTTP_BASIC_AUTH_ENABLED', true),

    'username' => env('HTTP_BASIC_USERNAME', 'username'),

    'password' => env('HTTP_BASIC_PASSWORD', 'passw0rt'),
];
