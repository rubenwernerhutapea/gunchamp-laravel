<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Competition;

class LombaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $competitions = Competition::paginate(16);

        return view('pages.competition', [
            'competitions' => $competitions
        ]);
    }
}
