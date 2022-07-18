<?php

namespace A17\HttpBasicAuth\Exceptions;

class HttpBasicAuth extends \Exception
{
    public static function missingService(): void
    {
        throw new self('HTTP Basic Auth service configuration is missing, please check config/http-basic-auth.php.');
    }

    public static function classNotFound(string $class): void
    {
        throw new self('Service class not found: ' . $class);
    }
}
