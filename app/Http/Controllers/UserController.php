<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());

        return redirect()->back()->with('success', 'Data User Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data User Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()
            ->with('success', 'User deleted successfully');
    }
}