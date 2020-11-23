<?php

namespace App\Http\Controllers;

use App\Layanan;
use App\Mitra;
use App\Pesanan;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $mitra = Mitra::all();
        $layanan = Layanan::all();
        $pesanan = Pesanan::all();

        return view('superadmin.index', compact('mitra', 'layanan', 'pesanan'));
    }

    public function show()
    {
        $mitra = Mitra::get();
        $layanan = Layanan::get();
        $pesanan = Pesanan::get();
        return view('superadmin.mitra.index', compact('mitra', 'layanan', 'pesanan'));
    }

    public function showCreate()
    {
        return view('superadmin.mitra.create');
    }

    public function create(Request $request)
    {
        $mitra = new Mitra();
        $mitra->nama = ucwords($request->nama);
        $mitra->email = $request->email;
        $mitra->no_hp = $request->no_hp;
        $mitra->alamat = $request->alamat;
        $mitra->password = bcrypt($request->password);
        $mitra->api_token = bcrypt($request->email);

        $mitra->save();

        alert()->success('Data mitra Berhasil Ditambahkan', 'Success');
        return redirect('/superadmin/mitra/index');
    }

    public function showEdit($id_mitra)
    {
        $mitra = Mitra::where('id_mitra', $id_mitra)->first();

        return view('/superadmin/mitra/edit', compact('mitra'));
    }

    public function edit(Request $request, $id_mitra)
    {
        $mitra = Mitra::where('id_mitra', $id_mitra)->first();
        $mitra->nama = ucwords($request->nama);
        $mitra->email = $request->email;
        $mitra->no_hp = $request->no_hp;
        $mitra->alamat = $request->alamat;

        $mitra->save();

        alert()->success('Data mitra Berhasil Ditambahkan', 'Success');
        return redirect('/superadmin/mitra/index');
    }

    public function delete($id_mitra)
    {
        Mitra::where('id_mitra', $id_mitra)->delete();

        alert()->success('Data Layanan Terhapus !', 'Deleted');
        return redirect('/superadmin/mitra/index');
    }
}
