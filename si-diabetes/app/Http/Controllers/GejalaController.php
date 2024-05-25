<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('gejala', compact('gejalas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gejala' => 'required',
        ]);

        Gejala::create($request->all());

        return redirect()->back()->with('success', 'Data Gejala Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gejala' => 'required',
        ]);
        $gejalas = Gejala::findOrFail($id);
        $gejalas->update($request->all());
        return redirect()->back()->with('success', 'Data Gejala Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $gejalas = Gejala::findOrFail($id);
        $gejalas->delete();

        return redirect()->back()->with('success', 'Gejala deleted successfully');
    }
}