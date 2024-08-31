<?php

use App\Http\Middleware\AdminCheck;
use App\Http\Middleware\GuestCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->group(base_path('routes/client.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
//       $middleware->appendToGroup('web',[
//           AdminCheck::class,
//           GuestCheck::class
//       ]);
$middleware->alias([
    'adminCheck' => AdminCheck::class,
    'guestCheck' => GuestCheck::class,

]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
