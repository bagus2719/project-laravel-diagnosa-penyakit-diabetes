<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('penyakit', compact('penyakits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyakit' => 'required',
        ]);

        Penyakit::create($request->all());

        return redirect()->back()->with('success', 'Data penyakit Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penyakit' => 'required',
        ]);
        $penyakits = Penyakit::findOrFail($id);
        $penyakits->update($request->all());
        return redirect()->back()->with('success', 'Data penyakit Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $penyakits = Penyakit::findOrFail($id);
        $penyakits->delete();

        return redirect()->back()->with('success', 'penyakit deleted successfully');
    }
}