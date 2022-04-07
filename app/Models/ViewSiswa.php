<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewSiswa extends Model
{
    use HasFactory;
    protected $table = 'view_siswa';
    protected $fillable = ['nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'no_telp', 'id_spp', 'nama_kelas', 'jurusan', 'tahun', 'nominal'];
}
