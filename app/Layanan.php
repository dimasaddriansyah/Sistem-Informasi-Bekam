<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    protected $fillable = [
        'nama', 'deskripsi', 'harga', 'pilihan', 'id_mitra',
    ];

    public function pesanan()
    {
        return $this->hasMany('App\pesanan', 'id_pesanan', 'id_layanan'); //model,namafield,primarykey tabel tujuan
    }

    public function mitra()
    {
        return $this->belongsTo('App\mitra', 'id_mitra', 'id_mitra');
    }
}
