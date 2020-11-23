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
        return $this->belongsTo('App\pelanggan', 'id_pelanggan', 'id_pelanggan');
    }

    public function layanan()
    {
        return $this->belongsTo('App\layanan', 'id_layanan', 'id_layanan');
    }

    public function mitra()
    {
        return $this->belongsTo('App\mitra', 'id_mitra', 'id_mitra');
    }

    public function getCreatedAtAttribute()
    {
        \Carbon\Carbon::setLocale('id');
    return \Carbon\Carbon::parse($this->attributes['created_at'])
       ->translatedFormat('l, d F Y H:i');
    }
}
