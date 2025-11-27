<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
    // ✅ 新增这一块：允许 deploy-webhook 跳过 CSRF 检查
    $middleware->validateCsrfTokens(except: [
        'deploy-webhook',
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
