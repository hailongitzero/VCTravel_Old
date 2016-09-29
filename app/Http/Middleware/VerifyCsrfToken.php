<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;


class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     * use Illuminate\Support\Str;
     * use Illuminate\Support\Str;
     * use Symfony\Component\HttpFoundation\Cookie;
     * use Illuminate\Contracts\Encryption\Encrypter;
     * use Illuminate\Session\TokenMismatchException;
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
