<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Pelanggan extends Authenticatable
{
    use Notifiable;

    protected $table = "pelanggan";

    protected $primaryKey = "id_pelanggan";

    protected $fillable = [
        'nama', 'email', 'api_token', 'alamat', 'no_hp', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pesanan()
    {
        return $this->hasMany('App\pesanan', 'id_pesanan', 'id_pelanggan'); //model,namafield,primarykey tabel tujuan
    }
}
