<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/registro', [AuthController::class, 'index'])->name('registro');
Route::post('/auth/registro', [AuthController::class, 'store']);

Route::get('/userspanel/usertickets/index', [AuthController::class, 'usertickets'])->name('usertickets');