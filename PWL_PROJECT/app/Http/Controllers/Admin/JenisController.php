<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenisLap = Jenis::all();
        return view('admin.jenis.index', compact('jenisLap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jenis = Jenis::all();
        return view('admin.jenis.create', compact('jenis'));
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
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('images')->store('imagesJenis', 'public');

        Jenis::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'images' => $image
        ]);

        return redirect()->route('jenis.index');
        return redirect()()->route('jenis.index')->with('success', 'Jenis Bershasil Ditambahkan');
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
        //
        $jenis = Jenis::find($id);
        return view('admin.jenis.edit', compact('jenis'));
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
        $jenis = Jenis::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('images')->store('imagesJenis', 'public');

        $jenis->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'images' => $image
        ]);

        $jenis->save();

        return redirect()->route('jenis.index')->with('status', 'Berhasil mengubah Jenis');
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
        Jenis::destroy($id);
        return redirect()->route('jenis.index')->with('success', 'Jenis Bershasil Dihapus');
    }
}
