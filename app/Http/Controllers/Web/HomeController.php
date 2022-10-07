<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RumusBin\AttributesRouter\RoteAttributes\Get;
use RumusBin\AttributesRouter\RoteAttributes\Middleware;

class HomeController extends Controller
{
    #[Get('/', name: 'index')]
    public function index(Request $request)
    {
        return view('welcome');
    }
}