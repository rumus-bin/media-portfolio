<?php


use AdminDashboard\Http\Controllers\ContentController;
use AdminDashboard\Http\Controllers\DashboardController;
use AdminDashboard\Http\Controllers\LoginController;
use AdminDashboard\Http\Controllers\MediaController;
use AdminDashboard\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index']);
Route::apiResource('pages', PageController::class);
Route::apiResource('contents', ContentController::class);
Route::apiResource('media', MediaController::class);