<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ViewPembayaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'ADMIN') {
            return redirect('/admin/siswa');
        } else if(Auth::user()->role == 'PETUGAS') {
            return redirect('/petugas/pembayaran');
        } else if(Auth::user()->role == 'SISWA'){     
            $c = ViewPembayaran::where('nama', Auth::user()->name)->get();
            // dd($c);     
            $b = array_key_last(end($c));
            $a = $c[$b];
            $data = ViewPembayaran::where('nama', Auth::user()->name)->get();           
            return view('/murid/index', compact('a', 'data'));

        }
        
        return view('home');
    }
}
