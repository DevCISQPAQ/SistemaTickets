<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/registro', [AuthController::class, 'index'])->name('registro');
Route::post('/auth/registro', [AuthController::class, 'store']);

Route::get('/userspanel/usertickets/index', [AuthController::class, 'usertickets'])->name('usertickets');

Route::prefix('admin')->name('admin.')->group(function () {
    // Login y logout
    // Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
    // Route::post('/', [AuthController::class, 'login'])->name('login');
    // Dashboard de asistencias
    Route::get('/tickets', [AdminController::class, 'tickets'])->name('tickets');
});