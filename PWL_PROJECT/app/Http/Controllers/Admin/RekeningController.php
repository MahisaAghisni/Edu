<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    //
    public function index()
    {
        $rekenings = Rekening::all();

        return view('admin.rekening.index', compact('rekenings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
        ]);

        Rekening::create($request->all());

        return redirect()->route('admin.rekening')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $rekening = Rekening::findOrFail($id);

        return view('customer.rekening.edit', compact('rekening'));
    }

    public function update(Request $request, $id)
    {
        $rekening = Rekening::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'nama_bank' => 'required',
            'no_rekening' => 'required',
        ]);

        $rekening->update($request->all());

        $rekening->save();

        return redirect()->route('admin.rekening')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $article = Rekening::findOrFail($id);

        $article->delete();

        return redirect()->route('admin.rekening')->with('success', 'Data berhasil diubah');
    }

}
