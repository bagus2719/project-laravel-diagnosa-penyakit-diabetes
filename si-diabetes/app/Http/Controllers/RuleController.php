<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Gejala;
use App\Models\Penyakit;

class RuleController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::with('rule')->get();
        $penyakits = Penyakit::with('rule')->get();
        $rule = Rule::all();
        return view('rule', compact('rule', 'gejalas', 'penyakits'));
    }
    public function create()
    {
        $rule = Rule::all();
        return view('rule.show', compact('rule'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_gejala' => 'required',
            'id_penyakit' => 'required',
        ]);

        rule::create($request->all());

        return redirect()->back()->with('success', 'Rule berhasil ditambahkan.');
    }

    public function show($id)
    {
        $rule = rule::findOrFail($id);
        return view('rule.show', compact('rule'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_gejala' => 'required',
            'id_penyakit' => 'required',
        ]);

        $rule = Rule::findOrFail($id);
        $rule->update($request->all());

        return redirect()->back()->with('success', 'Pasien berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $rule = Rule::findOrFail($id);
        $rule->delete();

        return redirect()->back()
            ->with('success', 'Pasien berhasil dihapus.');
    }
}