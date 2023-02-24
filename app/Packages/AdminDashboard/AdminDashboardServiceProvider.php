<?php

namespace AdminDashboard;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdminDashboardServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register(): void
    {
        View::addNamespace(
            'admin_dashboard',
            base_path('app/Packages/AdminDashboard/resources/views')
        );
    }
}