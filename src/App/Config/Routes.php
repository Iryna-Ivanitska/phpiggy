<?php

declare(strict_types=1);

namespace App\Config;

use App\Controllers\AuthController;
use Framework\App;
use App\Controllers\AboutController;
use App\Controllers\HomeController;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register', [AuthController::class, 'registerView']);
    $app->post('/register', [AuthController::class, 'register']);
}