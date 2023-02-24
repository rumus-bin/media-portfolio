<?php


use AdminDashboard\Http\Controllers\DashboardController;
use AdminDashboard\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index']);