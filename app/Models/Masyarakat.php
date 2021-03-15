<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class Masyarakat extends Authenticatable
// {
//     use HasFactory;

//     protected $table = 'Masyarakat';
//     protected $fillable = ['nik', 'nama', 'username', 'password', 'telp'];
//     public $timestamps = false;

//     public function pengaduan(){
//         return $this->hasMany(Pengaduan::class, 'nik');
//     }

//     public function getAuthIdentifierName()
//     {
//         return $this->getKeyName();
//     }

//     public function getAuthIdentifier()
//     {
//         return $this->getKey();
//     }
// }


namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'masyarakat';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
