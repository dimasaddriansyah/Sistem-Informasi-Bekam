<?php

namespace App\Http\Controllers;

use App\Layanan;
use App\Mitra;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{


    public function index()
    {
        $mitra = Mitra::where('id_mitra', Auth::guard('mitra')->user()->id_mitra)->get();
        $layanan = Layanan::where('id_mitra', Auth::guard('mitra')->user()->id_mitra)->get();
        $pesanan = Pesanan::get();
        return view('mitra.index', compact('mitra', 'layanan', 'pesanan'));
    }

    public function showCreate()
    {
        return view('mitra.layanan.create');
    }

    public function create(Request $request)
    {
        $layanan = new Layanan();
        $layanan->nama = ucwords($request->nama);
        $layanan->deskripsi = ucwords($request->deskripsi);
        $layanan->harga = $request->harga;
        $layanan->pilihan = $request->pilihan;

        $layanan->save();

        alert()->success('Data layanan Berhasil Ditambahkan', 'Success');
        return redirect('/mitra/layanan/index');
    }

    public function showEdit($id_layanan){
        $layanan = Layanan::where('id_layanan', $id_layanan)->first();

        return view('/mitra/layanan/edit', compact('layanan'));
    }

    public function edit(Request $request,$id_layanan)
    {
        $layanan = Layanan::where('id_layanan',$id_layanan)->first();
        $layanan->nama = ucwords($request->nama);
        $layanan->deskripsi = ucwords($request->deskripsi);
        $layanan->harga = $request->harga;
        $layanan->pilihan = $request->pilihan;
        $layanan->save();

        alert()->success('Data layanan Berhasil Ditambahkan', 'Success');
        return redirect('/mitra/layanan/index');
    }

    public function delete($id_layanan){
        Layanan::where('id_layanan', $id_layanan)->delete();

        alert()->success('Data Layanan Terhapus !', 'Deleted');
        return redirect('/mitra/layanan/index');
    }

}

