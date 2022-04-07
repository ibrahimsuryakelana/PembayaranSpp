<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPembayaran extends Model
{
    use HasFactory;
    protected $table = 'view_bayar';
    protected $fillable = ['id_petugas', 'nisn', 'tgl_bayar', 'bulan_bayar', 'tahun_bayar', 'id_spp', 'jumlah_bayar', 'name', 'nama', 'alamat', 'nama_kelas', 'jurusan','tahun', 'nominal'];
}
