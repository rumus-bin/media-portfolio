<?php

namespace AdminDashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use RumusBin\AttributesRouter\RoteAttributes\Get;

class LoginController extends Controller
{
    #[Get('/login', name: 'admin-login')]
    public function index()
    {
        return 'Admin dashboard index controller';
    }

}