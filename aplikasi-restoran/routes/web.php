<?php

use App\Http\Controllers\LandingPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\WaiterController;

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/', [LandingPage::class, 'index']);
});

Route::middleware(['auth', 'role:cashier'])->group(function () {
    Route::get('/cashier/dashboard', [CashierController::class, 'index']);
});

Route::middleware(['auth', 'role:chef'])->group(function () {
    Route::get('/chef/dashboard', [ChefController::class, 'index']);
});

Route::middleware(['auth', 'role:waiter'])->group(function () {
    Route::get('/waiter/dashboard', [WaiterController::class, 'index']);
});

Route::get('/customer/dashboard', [CustomerController::class, 'index']);

