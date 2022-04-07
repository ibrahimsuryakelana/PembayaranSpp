<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewPembayaran;

class HistoriController extends Controller
{
    public function index()
    {
        $data_histori = ViewPembayaran::all();
        return view('/admin/histori/index', compact('data_histori'));
    }
    public function struk($id)
    {
        $histori = ViewPembayaran::find($id);
        return view('/admin/histori/struk', compact('histori'));
    }
}
