<?php

namespace AdminDashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
// index, store, show, update, destroy for each controller.

    public function index()
    {
        return view('admin-dashboard::pages.index');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        // show the page
    }

    public function update($id)
    {
        // update the page
    }

    public function destroy($id)
    {
        // destroy the page
    }
}