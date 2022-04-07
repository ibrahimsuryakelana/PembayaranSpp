<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $fillable = ['tahun', 'nominal'];

    public function siswa()
    {
        return $this->hasOne('App\Siswa');
    }
}
