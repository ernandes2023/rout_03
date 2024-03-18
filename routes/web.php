<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\listController;

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/produtos/{name}/{lastname?}', [userController::class, 'index']);

 Route::get('/calculo/{num1?}/{op?}/{num2?}', [userController::class, 'calculo']);

 Route::get('/dados/{name?}/{lastname?}/{email?}/{tel?}/{rua?}/{num?}', [userController::class, 'dados']);

 Route::get('/lista/{name?}/{lastname?}', [listController::class, 'packadge']);
