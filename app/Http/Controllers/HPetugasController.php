<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewPembayaran;

class HPetugasController extends Controller
{
    public function index()
    {
        $data_histori = ViewPembayaran::all();
        return view('/petugas/histori/index', compact('data_histori'));
    }
    public function struk($id)
    {
        $histori = ViewPembayaran::find($id);
        return view('/petugas/histori/struk', compact('histori'));
    }
}
