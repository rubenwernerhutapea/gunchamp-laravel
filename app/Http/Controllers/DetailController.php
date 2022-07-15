<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $lomba = Competition::with(['user'])->where('slug', $id)->firstOrFail();
        return view('pages.detail', [
            'lomba' => $lomba
        ]);
    }
}
