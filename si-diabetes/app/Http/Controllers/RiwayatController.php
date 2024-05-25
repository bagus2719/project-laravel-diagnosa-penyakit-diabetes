<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayat;
use App\Models\Pasien;
use App\Models\Penyakit;
use App\Models\Hasil;

class RiwayatController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::with('riwayat')->get();
        $penyakits = Penyakit::with('riwayat')->get();
        $hasils = Hasil::with('riwayat')->get();
        $riwayat = riwayat::all();
        return view('riwayat', compact('riwayat', 'pasiens', 'penyakits', 'hasils'));
    }
    public function create()
    {
        $riwayat = riwayat::all();
        return view('riwayat.show', compact('riwayat'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required',
            'id_penyakit' => 'required',
            'id_hasil' => 'required',
        ]);

        riwayat::create($request->all());

        return redirect()->back()->with('success', 'Riwayat berhasil ditambahkan.');
    }

    public function show($id)
    {
        $riwayat = riwayat::findOrFail($id);
        return view('riwayat.show', compact('riwayat'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pasien' => 'required',
            'id_penyakit' => 'required',
            'id_hasil' => 'required',
        ]);

        $riwayat = riwayat::findOrFail($id);
        $riwayat->update($request->all());

        return redirect()->back()->with('success', 'Riwayat berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $riwayat = riwayat::findOrFail($id);
        $riwayat->delete();

        return redirect()->back()
            ->with('success', 'Riwayat berhasil dihapus.');
    }
}