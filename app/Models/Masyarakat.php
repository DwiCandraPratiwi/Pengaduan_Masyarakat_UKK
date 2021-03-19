<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $table = 'Masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp'];
    public $timestamps = false;
    protected $guards = 'masyarakat'; //yg di auth

    public function pengaduan(){ 
        return $this->hasMany(Pengaduan::class, 'nik');
    }

}


