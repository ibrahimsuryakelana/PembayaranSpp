<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    public function index()
    {
        $data_spp = Spp::all();
        return view('/admin/spp/index', compact('data_spp'));
    }
    public function create()
    {
        return view('/admin/spp/create');
    }
    public function store(Request $request)
    {
        Spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect('/admin/spp')->with('sucsess', 'Data Berhasil diinput');
    }
    public function edit($id)
    {
        $spp = Spp::find($id);
        // dd($spp);
        return view('/admin/spp/edit', compact('spp'));
    }
    public function update(Request $request, $id)
    {
        $spp = Spp::find($id);
        $spp->update($request->all());
        return redirect('/admin/spp')->with('sucsess', 'Data Berhasil diedit');
    }
    public function delete($id)
    {
        $spp = Spp::find($id);
        $spp->delete($spp);
        return redirect('/admin/spp')->with('sucsesss', 'Data Berhasil dihapus');
    }
}
