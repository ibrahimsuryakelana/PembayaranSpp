<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\ViewSiswa;
use App\Models\User;
use App\Models\Spp;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;


class SiswaController extends Controller
{
    public function index()
    {
        $user = User::all();
        // dd($user);
        $data_siswa = ViewSiswa::all();
        return view('/admin/siswa/index', compact('data_siswa', 'user'));
    }
    public function create()
    {
        $spp = Spp::all();
        $kelas = Kelas::all();
        return view('/admin/siswa/create', compact('spp', 'kelas'));
    }
    public function store(Request $request)
    {   
        User::create([
            'name' => $request->nama,
            'email' => $request->nis.'@wikrama',
            'role' => 'SISWA',
            'password' => Hash::make($request->nis),
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);  
        return redirect('/admin/siswa')->with('sucsess', 'Data Berhasil diinput');
    }
    public function edit($nisn)
    {
        $siswa = Siswa::where('nisn', $nisn)->first();
        $kelas = Kelas::all();
        $spp = Spp::all();
        // dd($siswa);
        return view('/admin/siswa/edit', compact('siswa', 'kelas', 'spp'));
    }
    public function update(Request $request, $nisn)
    {
        $siswa = Siswa::where('nisn', $nisn);
        $siswa->update($request->except(['_token']));
        return redirect('/admin/siswa')->with('sucsess', 'Data Berhasil diedit');
    }
    public function delete($nisn)
    {
        $siswa = Siswa::where('nisn', $nisn);
        $siswa->delete($siswa);
        return redirect('/admin/siswa')->with('sucsesss', 'Data Berhasil dihapus');
    }
}
