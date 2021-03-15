<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'Pengaduan';

    protected $fillable = ['tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];


    public function tanggapan(){
        return $this->hasMany(Tanggapan::class, 'id_pengaduan');
    }

    public function masyarakat(){
        return $this->belongsTo(Masyarakat::class, 'nik');
    }
}
