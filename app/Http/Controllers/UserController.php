<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data_user = User::all();
        return view('/admin/user/index', compact('data_user'));
    }
    public function create()
    {
        return view('/admin/user/create');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/admin/user')->with('sucsess', 'Data Berhasil diinput');
    }
    public function edit($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('/admin/user/edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->except(['_token']));
        return redirect('/admin/user');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return redirect('/admin/user')->with('sucsesss', 'Data Berhasil dihapus');
    }
}
