<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ArenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Arena::with('jenis')->paginate(3);

        // dd($posts);
        return view('admin.arenas.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $jenisLap = DB::table('jenis')->get();

        $arena = Arena::all();
        return view('admin.arenas.create', ['arena' => $arena], ['jenisLap' => $jenisLap]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $images = [
            'nama' => 'required',
            'price' => 'required|numeric',
            'jenis_id' => 'required',
            'image' => 'image|file',

        ];
        $validateData = $request->validate($images);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('arena', 'public');
        }

        Arena::create($validateData);
        return redirect()->route('arena.index')->with('success', 'Arena Bershasil Ditambahkan');
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
        $arena = Arena::find($id);
        return view('admin.arenas.show', compact('arena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jenisLap = DB::table('jenis')->get();

        $arena = Arena::find($id);
        return view('admin.arenas.edit', compact('arena', 'jenisLap'));
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
        //

        $rules = [
            'nama' => 'required',
            'price' => 'required|numeric',
            'jenis_id' => 'required',
            'image' => '',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('arena', 'public');
        }

        Arena::where('id', $id)->update($validateData);
        return redirect()->route('arena.index')->with('success', 'Arena Bershasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Arena::find($id)->delete();
        Alert::warning('Warning Title', 'Arena Bershasil Dihapus');
        return redirect()->route('arena.index');
    }
}
