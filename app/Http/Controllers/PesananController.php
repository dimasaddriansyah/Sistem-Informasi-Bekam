<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mitra;
use App\Pesanan;
use App\Layanan;
use App\Pelanggan;
use Carbon\Carbon;

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

        alert()->success('Data Pesanan Berhasil Dikonfirmasi', 'Success');
        return redirect('/mitra/pesanan/index');
    }

    public function showEdit($id_pesanan)
    {
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->first();

        return view('/mitra/pesanan/edit', compact('pesanan'));
    }

    public function showCreate()
    {
        $pelanggan = Pelanggan::all();
        $layanan = Layanan::all();
        $mitra = Mitra::all();

        return view('mitra.pesanan.create', compact('pelanggan','layanan','mitra'));
    }

    public function create(Request $request)
    {


        $file = $request->file('bukti_pembayaran');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'uploads';
        $file -> move($tujuan_upload,$nama_file);

        $tanggal = Carbon::now();

        $pesanan = new Pesanan();
        $pesanan->id_pelanggan = $request->id_pelanggan;
        $pesanan->id_layanan = $request->id_layanan;
        $pesanan->bukti_pembayaran = $nama_file;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;

        $pesanan->save();

        alert()->success('Data Pesanan Berhasil Ditambahkan', 'Success');
        return redirect('/mitra/pesanan/index');
    }
}
