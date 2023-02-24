<?php

namespace AdminDashboard\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin_dashboard::index');
    }

}