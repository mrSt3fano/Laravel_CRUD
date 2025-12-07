<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\superAdmin;
use App\Http\Middleware\admin;
use App\Http\Middleware\normal;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'MDsuperadmin'=>superAdmin::class,
            'MDadmin'=>admin::class,
            'MDnormal'=>normal::class
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
