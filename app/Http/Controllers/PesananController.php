<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mitra;
use App\Pesanan;
use App\Layanan;

class PesananController extends Controller
{
    public function index()
    {
        $mitra = Mitra::get();
        $layanan = Layanan::get();
        $pesanan = Pesanan::get();
        return view('mitra.pesanan.index', compact('mitra', 'layanan', 'pesanan'));
    }

    public function edit($id_pesanan)
    {
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->first();

        $pesanan->status = 1;

        $pesanan->save();

        alert()->success('Data Pesanan Berhasil Ditambahkan', 'Success');
        return redirect('/mitra/pesanan/index');
    }

    public function showEdit($id_pesanan)
    {
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->first();

        return view('/mitra/pesanan/edit', compact('pesanan'));
    }
}
