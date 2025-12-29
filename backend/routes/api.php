<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OsController;
use App\Http\Controllers\NotificationController;

return [
    'v1' => [
        'auth' => [
            ['POST', '/auth/login', [AuthController::class, 'login']],
            ['POST', '/auth/logout', [AuthController::class, 'logout']],
        ],
        'clients' => [
            ['GET', '/clients', [ClientController::class, 'index']],
            ['POST', '/clients', [ClientController::class, 'store']],
            ['PUT', '/clients/{id}', [ClientController::class, 'update']],
        ],
        'vehicles' => [
            ['GET', '/vehicles', [VehicleController::class, 'index']],
            ['POST', '/vehicles', [VehicleController::class, 'store']],
        ],
        'products' => [
            ['GET', '/products', [ProductController::class, 'index']],
            ['POST', '/products', [ProductController::class, 'store']],
        ],
        'os' => [
            ['GET', '/os', [OsController::class, 'index']],
            ['POST', '/os', [OsController::class, 'store']],
            ['GET', '/os/{id}', [OsController::class, 'show']],
            ['POST', '/os/{id}/status', [OsController::class, 'changeStatus']],
            ['GET', '/os/{id}/timeline', [OsController::class, 'timeline']],
            ['POST', '/os/{id}/items', [OsController::class, 'addItem']],
            ['POST', '/os/{id}/attachments', [OsController::class, 'uploadAttachment']],
        ],
        'notifications' => [
            ['GET', '/os/{id}/notifications', [NotificationController::class, 'byOs']],
        ],
    ],
];
