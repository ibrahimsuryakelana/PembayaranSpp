<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $data_kelas = Kelas::all();
        return view('/admin/kelas/index', compact('data_kelas'));
    }
    public function create()
    {
        return view('/admin/kelas/create');
    }
    public function store(Request $request)
    {
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'jurusan' => $request->jurusan,
        ]);
        return redirect('/admin/kelas')->with('sucsess', 'Data Berhasil diinput');
    }
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        // dd($kelas);
        return view('/admin/kelas/edit', compact('kelas'));
    }
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->except(['_token']));
        return redirect('/admin/kelas')->with('sucsess', 'Data Berhasil diedit');
    }
    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete($kelas);
        return redirect('/admin/kelas')->with('sucsesss', 'Data Berhasil dihapus');
    }
}
