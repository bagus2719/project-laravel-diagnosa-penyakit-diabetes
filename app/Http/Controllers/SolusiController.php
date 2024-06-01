<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solusi;
use App\Models\Penyakit;

class SolusiController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::with('solusi')->get();
        $solusi = Solusi::all();
        return view('solusi', compact('solusi', 'penyakits'));
    }
    public function create()
    {
        $solusi = Solusi::all();
        return view('solusi.show', compact('solusi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_penyakit' => 'required',
            'solusi' => 'required',
        ]);

        Solusi::create($request->all());

        return redirect()->back()->with('success', 'Solusi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $solusi = Solusi::findOrFail($id);
        return view('solusi.show', compact('solusi'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_penyakit' => 'required',
            'solusi' => 'required',
        ]);

        $solusi = Solusi::findOrFail($id);
        $solusi->update($request->all());

        return redirect()->back()->with('success', 'Solusi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $solusi = Solusi::findOrFail($id);
        $solusi->delete();

        return redirect()->back()
            ->with('success', 'Solusi berhasil dihapus.');
    }
}