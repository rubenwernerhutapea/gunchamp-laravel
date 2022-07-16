<?php

namespace App\Http\Controllers;

use App\Competition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardLombaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lomba = Competition::where('user_id', Auth::user()->id)->get();

        return view('pages.dashboard-lomba', [
            'lomba' => $lomba
        ]);
    }

    public function create()
    {
        return view('pages.dashboard-lomba-create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['poster'] = $request->file('poster')->store('assets/lomba', 'public');

        Competition::create($data);

        return redirect()->route('dashboard-lomba');
    }
}
