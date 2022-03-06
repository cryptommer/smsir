<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/smsir')->group(function () {
    Route::prefix('/send')->group(function () {
        Route::get('/bulk', [\Cryptommer\Smsir\Controllers\ViewController::class, 'sendbulk']);
    });
});