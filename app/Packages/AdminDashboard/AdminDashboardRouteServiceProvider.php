<?php

namespace AdminDashboard;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class AdminDashboardRouteServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::prefix('admin')
                ->group(base_path('app/Packages/AdminDashboard/routes/admin-dashboard.php'));
        });
    }
}