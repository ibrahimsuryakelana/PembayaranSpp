<?php

namespace App\Exports;

use App\Models\ViewPembayaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PembayaranExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ViewPembayaran::all();
    }
    public function headings():array
    {
        return ['ID Pembayaran','ID Petugas', 'Nisn', 'Tanggal Bayar', 'Bulan Bayar', 'Tahun Bayar', 'Id Spp', 'Jumlah Bayar','created_at','update_at', 'Nama Petugas', 'Nama Siswa', 'Alamat', 'Nama Kelas', 'Jurusan','Tahun', 'Nominal'];
    }
}
