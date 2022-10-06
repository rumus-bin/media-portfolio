<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use RumusBin\AttributesRouter\RoteAttributes\Get;

class HomeController extends Controller
{
    #[Get('/', name: 'index', middleware: ['web'])]
    public function index(Request $request)
    {
        return view('welcome');
    }

    #[Get('/dashboard', name: 'dashboard', middleware: ['auth', 'verified'])]
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
}