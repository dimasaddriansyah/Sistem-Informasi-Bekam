<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama', 'email', 'api_token', 'alamat', 'no_hp', 'password',
    ];
    protected $hidden = [
        'password',
    ];

    public function pesanan()
    {
        return $this->hasMany('App\pesanan', 'id_pesanan', 'id_pelanggan'); //model,namafield,primarykey tabel tujuan
    }
}
