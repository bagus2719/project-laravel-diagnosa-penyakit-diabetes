<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Pasien;
use Illuminate\Http\Request;

class HasilController extends Controller
{

    public function index()
    {
        $pasiens = Pasien::with('hasil')->get();
        $hasils = Hasil::all();
        return view('hasil', compact('hasils', 'pasiens'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        return view('hasil', compact('pasiens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required',
            'hasil' => 'required',
        ]);

        Hasil::create($request->all());

        return redirect()->back()->with('success', 'Data hasil Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pasien' => 'required',
            'hasil' => 'required',
        ]);

        $hasils = Hasil::findOrFail($id);
        $hasils->update($request->all());
        return redirect()->back()->with('success', 'Data hasil Berhasil Diperbarui');
    }
    public function show($id)
    {
        $pasiens = Pasien::findOrFail($id);
        return view('hasil.show', compact('pasiens'));
    }
    public function destroy($id)
    {
        $hasils = Hasil::findOrFail($id);
        $hasils->delete();

        return redirect()->back()->with('success', 'hasil deleted successfully');
    }
}