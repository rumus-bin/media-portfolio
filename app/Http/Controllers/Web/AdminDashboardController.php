<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RumusBin\AttributesRouter\RoteAttributes\Get;

class AdminDashboardController extends Controller
{

    #[Get('/dashboard', name: 'dashboard', middleware: ['auth', 'verified'])]
    public function adminDashboard(Request $request)
    {

//        return Inertia::render('Dashboard');
        return response()->json(['admin-dash']);
    }
}