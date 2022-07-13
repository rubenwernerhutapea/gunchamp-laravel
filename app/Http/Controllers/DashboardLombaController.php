<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardLombaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard-lomba');
    }

    public function create()
    {
        return view('pages.dashboard-lomba-create');
    }
}
