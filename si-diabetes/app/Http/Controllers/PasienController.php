<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\User;
use Barryvdh\DomPDF\PDF;

class PasienController extends Controller
{
    public function index()
    {
        $users = User::with('pasien')->get();
        $pasien = Pasien::all();
        return view('pasien', compact('pasien', 'users'));
    }
    public function create()
    {
        $users = User::all();
        return view('pasien', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required',
            'keterangan' => 'required',
        ]);

        Pasien::create($request->all());

        return redirect()->back()->with('success', 'Pasien berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telp' => 'required',
            'keterangan' => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->back()->with('success', 'Pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->back()
            ->with('success', 'Pasien berhasil dihapus.');
    }

    public function exportpdf()
    {
        $dataPasien = Pasien::all(); // Ambil data pasien dari database

        // Mengirim data ke view
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pasien.cetak-pasien', ['dataPasien' => $dataPasien]);

        // Download file PDF
        return $pdf->download('data-pasien.pdf');
    }
}