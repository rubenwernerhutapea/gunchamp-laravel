<?php

namespace App\Http\Controllers;

use App\User;
use App\Competition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function edit($id)
    {
        $item = Competition::with(['user'])->findOrFail($id);

        return view('pages.dashboard-lomba-detail',[
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Competition::findOrFail($id);

        $data['slug'] = Str::slug($request->name);

        if ($request->file('poster')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['poster'] = $request->file('poster')->store('assets/lomba', 'public');
        }
        
        $item->update($data);

        return redirect()->route('dashboard-lomba');
    }

    public function delete($id)
    {
        $item = Competition::findorFail($id);
        $item->delete();

        return redirect()->route('dashboard-lomba');
    }
}
