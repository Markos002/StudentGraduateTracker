<?php

use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\checkRole;

    return function (Middleware $middleware) {
        $middleware->alias([
            'auth'     => \Illuminate\Auth\Middleware\Authenticate::class,
            'guest'    => \Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,   
            'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
            'role'     => \App\Http\Middleware\checkRole::class,
        ]);
        
};
