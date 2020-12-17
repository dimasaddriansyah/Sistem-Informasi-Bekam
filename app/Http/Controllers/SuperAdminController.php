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
        $this->validate(
            $request,
            [
                'nama'      => 'required|unique:mitra|min:4|regex:/^[\pL\s\-]+$/u',
                'email'     => 'required|email|unique:mitra',
                'no_hp'     => 'required|unique:mitra|regex:/(08)[0-9]{10}/',
                'alamat'    => 'required|min:5',
                'password'  => 'required|min:5',
            ],
            [
                'nama.required'     => 'Harus Mengisi Bagian Nama Mitra!',
                'nama.min'          => 'Nama Mitra Minimal 4 Huruf !',
                'nama.unique'       => 'Nama Mitra Sudah Terdaftar !',
                'nama.regex'        => 'Inputan Nama Mitra Tidak Valid !',
                'email.required'    => 'Harus Mengisi Bagian Email !',
                'email.email'       => 'Inputan Email Tidak Valid !',
                'email.unique'      => 'Email Sudah Terdaftar !',
                'no_hp.required'    => 'Harus Menisi Bagian No Handphone !',
                'no_hp.unique'      => 'No Handphone Sudah Terdaftar !',
                'no_hp.regex'       => 'Inputan No Handphone Tidak Valid !',
                'alamat.required'   => 'Harus Mengisi Bagian Alamat !',
                'alamat.min'        => 'Alamat Minimal 5 Huruf !',
                'password.required' => 'Harus Mengisi Bagian Password !',
                'password.min'      => 'Password Minimal 5 Huruf !',
            ]
        );

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
        $this->validate(
            $request,
            [
                'nama'      => 'required|min:4|regex:/^[\pL\s\-]+$/u',
                'email'     => 'required|email',
                'no_hp'     => 'required|regex:/(08)[0-9]{10}/',
                'alamat'    => 'required|min:5',
            ],
            [
                'nama.required'     => 'Harus Mengisi Bagian Nama Mitra!',
                'nama.min'          => 'Nama Mitra Minimal 4 Huruf !',
                'nama.regex'        => 'Inputan Nama Mitra Tidak Valid !',
                'email.required'    => 'Harus Mengisi Bagian Email !',
                'email.email'       => 'Inputan Email Tidak Valid !',
                'no_hp.required'    => 'Harus Menisi Bagian No Handphone !',
                'no_hp.regex'       => 'Inputan No Handphone Tidak Valid !',
                'alamat.required'   => 'Harus Mengisi Bagian Alamat !',
                'alamat.min'        => 'Alamat Minimal 5 Huruf !',
            ]
        );

        $mitra = Mitra::where('id_mitra', $id_mitra)->first();
        $mitra->nama = ucwords($request->nama);
        $mitra->email = $request->email;
        $mitra->no_hp = $request->no_hp;
        $mitra->alamat = $request->alamat;
        $mitra->save();

        alert()->success('Data mitra Berhasil Diedit', 'Success');
        return redirect('/superadmin/mitra/index');
    }

    public function delete($id_mitra)
    {
        Mitra::where('id_mitra', $id_mitra)->delete();

        alert()->success('Data Layanan Terhapus !', 'Deleted');
        return redirect('/superadmin/mitra/index');
    }

    public function showLayanan()
    {
        $mitra = Mitra::get();
        $layanan = Layanan::get();
        $pesanan = Pesanan::get();
        return view('superadmin.layanan.index', compact('mitra', 'layanan', 'pesanan'));
    }

    public function showPesanan()
    {
        $mitra = Mitra::get();
        $layanan = Layanan::get();
        $pesanan = Pesanan::get();
        return view('superadmin.pesanan.index', compact('mitra', 'layanan', 'pesanan'));
    }
}
