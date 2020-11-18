<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $fillable = [
        'id_layanan', 'id_pelanggan', 'bukti_pembayaran', 'tanggal',
    ];

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id_pesanan', 'DESC');
    }

    public function pelanggan()
    {
        return $this->belongsTo('App\pelanggan', 'id_pelanggan', 'id_pesanan');
    }
}
