<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Competition;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\LombaRequest;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Competition::with(['user']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <a class="btn btn-info btn-sm mr-2" style="padding: 0.375rem 0.75rem;font-size: 0.875rem;margin-right:3px" href="' . route('lomba.edit', $item->id) . '">
                                Edit
                            </a>
                            <form action="' . route('lomba.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>';
                })
                ->editColumn('poster', function ($item) {
                    return $item->poster ? '<img src="' . Storage::url($item->poster) . '" style="max-height: 100px;"/>' : '';
                })
                ->rawColumns(['action', 'poster'])
                ->make();
        }

        return view('pages.admin.lomba.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('pages.admin.lomba.create', [
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['poster'] = $request->file('poster')->store('assets/lomba', 'public');

        Competition::create($data);

        return redirect()->route('lomba.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Competition::findOrFail($id);
        $user = User::all();

        return view('pages.admin.lomba.edit',[
            'item' => $item,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Competition::findOrFail($id);

        $data['slug'] = Str::slug($request->name);

        if ($request->file('poster')) {
            $data['poster'] = $request->file('poster')->store('assets/lomba', 'public');
        }

        // if (request()->hasFile('poster') && request('poster') != '') {
        //     $imagePath = public_path('assets/lomba'.$request->poster);
        //     if(Storage::exists($imagePath)) {
        //         Storage::delete($imagePath);
        //     }
        //     $poster = $request->file('poster')->store('assets/lomba', 'public');
        //     $data['poster'] = $poster;
        // }

        $item->update($data);

        return redirect()->route('lomba.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Competition::findorFail($id);
        $item->delete();

        return redirect()->route('lomba.index');
    }
}
