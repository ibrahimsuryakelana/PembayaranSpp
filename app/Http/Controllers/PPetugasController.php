<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Auth;
use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Spp;
use App\Models\ViewPembayaran;
use App\Models\ViewSiswa;
use App\Exports\PembayaranExport;
use Maatwebsite\Excel\Facades\Excel;


class PPetugasController extends Controller
{
    public function index()
    {
        $data_pembayaran = ViewPembayaran::all();
        return view('/petugas/pembayaran/index', compact('data_pembayaran'));
    }
    public function create()
    {
        $siswa = ViewSiswa::all();
        // dd($siswa);
        return view('/petugas/pembayaran/create', compact('siswa'));
    }
    public function store(Request $request)
    {
        $siswa = Siswa::where('nisn', $request->nisn)->first();
        $spp = Spp::where('id', $request->tahun)->first();
        $pembayaran = ViewPembayaran::where('nisn', $request->nisn)->where('bulan_bayar', $request->bulan_bayar)->where('tahun_bayar', $request->tahun_bayar)->first();
        $siswav = ViewSiswa::where('nisn', $request->nisn)->first();
        $tambah = $siswav->tahun + 3;
        // dd($tambah);

        if ($request->jumlah_bayar < $siswav->nominal) {
            return redirect('/petugas/pembayaran/create')->with(['error' =>'Maaf Uang Anda Tidak Mencukupi, Jumlah Pembayaran siswa : Rp. '. $siswav->nominal]);
        }
        elseif ($request->jumlah_bayar <= 0 ) {
            return redirect('/petugas/pembayaran/create')->with(['error' => 'Harap isi dengan benar, Jumlah Pembayaran siswa : Rp.'. $siswav->nominal]);
        }elseif($pembayaran != null) {
            return redirect('/petugas/pembayaran/create')->with(['error' => 'Spp ini sudah dibayar, anda terahir membayar Spp pada tahun : '. $pembayaran->tahun_bayar. ' pada bulan : '. $pembayaran->bulan_bayar]);
        }else if($request->tahun_bayar > $tambah){
            return redirect('/petugas/pembayaran/create')->with(['error' => 'Spp diatas tahun '.$tambah. ' tidak bisa dilakukan, karena siswa telah lulus']);
        }else {
            Pembayaran::create([
                'id_petugas' => Auth::user()->id,
                'nisn' => $request->nisn,
                'tgl_bayar' => Carbon::now()->timezone('Asia/jakarta'),
                'bulan_bayar' => $request->bulan_bayar,
                'tahun_bayar' => $request->tahun_bayar,
                'id_spp' => $siswa->id_spp,
                'jumlah_bayar' => $request->jumlah_bayar,
            ]);
            $i = Pembayaran::where('nisn', $request->nisn)->where('bulan_bayar', $request->bulan_bayar)->where('tahun_bayar', $request->tahun_bayar)->first();
            return redirect('/petugas/pembayaran/'.$i->id.'/struk')->with(['error' => 'Bulan ini sudah Dibayar'. $pembayaran]);
    
        }
    }
    public function delete($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete($pembayaran);
        return redirect('/petugas/pembayaran')->with('sucsesss', 'Data Berhasil dihapus');
    }
    public function export_excel()
	{
		return Excel::download(new PembayaranExport, 'pembayaran.xlsx');
	}

    public function getData($nisn)
    {
        $siswa = ViewPembayaran::where('nisn', $nisn)->get();
        // dd($siswa);
        $ind = array_key_last(end($siswa));

        $data = [
            'siswa' => $siswa[$ind],
            'proses' => 'suksesss',
        ];
        
        return response()->json($data);
    }
    public function struk($id)
    {
        $histori = ViewPembayaran::find($id);
        return view('/petugas/pembayaran/struk', compact('histori'));
    }
}
