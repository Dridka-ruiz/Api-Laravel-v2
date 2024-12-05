<?php

use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\PermisoController;
use App\Http\Controllers\Api\RolController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserController;

Route::middleware('api')->group(function () {
    Route::apiResource('productos', ProductoController::class);
});
Route::middleware('api')->group(function () {
    Route::apiResource('permisos', PermisoController::class);
});
Route::middleware('api')->group(function () {
    Route::apiResource('rols', RolController::class);
});

//Login
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::post('/usuarios', [UserController::class, 'store']);
Route::get('/usuarios', function () {
    return response()->json(['message' => 'Por favor usa POST para crear un usuario'], 405);
});

Route::middleware('auth:sanctum', 'permission:productos.mostrar')->get('/productos', function () {
    // Lógica aquí
});
