<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Layanan;
use App\Transformers\LayananTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function index(Layanan $layanan)
    {
        $layanan = $layanan->all();

        return fractal()
            ->collection($layanan)
            ->transformWith(new LayananTransformer)
            ->toArray();
    }

    public function indexById(Layanan $layanan, $id_layanan)
    {
        $layanan = Layanan::where('id_layanan', $id_layanan)->first();

        if ($layanan) {
            return fractal()
                ->item($layanan)
                ->transformWith(new LayananTransformer)
                ->toArray();
        }

        return response()->json([
            "message" => "PUT Method With Id " . $id_layanan . " Not Found",
        ], 400);
    }

    public function add(Request $request, Layanan $layanan)
    {
        $this->validate(
            $request,
            [
                'nama'          => 'required|min:5|unique:layanan',
                'harga'         => 'required|min:1|alpha_num',
                'deskripsi'     => 'required|min:5',
                'pilihan'       => 'required|min:2',

            ],
            [
                'name.required' => 'Harus Mengisi Bagian Nama Layanan !',
                'nama.min' => 'Minimal 5 Huruf Untuk Nama Layanan !',
                'nama.unique' => 'Nama Layanan Sudah Tersedia !',
                'harga.required' => 'Harus Mengisi Bagian Nama Layanan !',
                'harga.min' => 'Tidak Boleh Minus atau Kosong !',
                'deskripsi.required' => 'Harus Mengisi Bagian Nama Layanan !',
                'deskripsi.min' => 'Minimal 5 Huruf Untuk Deskripsi !',
                'pilihan.required' => 'Harus Mengisi Bagian Nama Layanan !',
                'pilihan.min' => 'Minimal 5 Huruf Untuk Pilihan !',
            ]
        );

        $layanan = $layanan->create([
            'nama'          => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'harga'         => $request->harga,
            'pilihan'       => $request->pilihan,
        ]);

        $response = fractal()
            ->item($layanan)
            ->transformWith(new LayananTransformer)
            ->toArray();


        return response()->json([
            $response,
            "message" => "Tambah Data Layanan Berhasil"
        ], 201);
    }

    public function update(Request $request, $id_layanan)
    {
        $layanan = Layanan::where('id_layanan', $id_layanan)->first();

        if ($layanan) {
            $layanan->id_layanan = $layanan->id_layanan;
            $layanan->nama = $request->nama ? $request->nama : $layanan->nama;
            $layanan->deskripsi = $request->deskripsi ? $request->deskripsi : $layanan->deskripsi;
            $layanan->harga = $request->harga ? $request->harga : $layanan->harga;
            $layanan->pilihan = $request->pilihan ? $request->pilihan : $layanan->pilihan;
            $layanan->save();

            $response = fractal()
                ->item($layanan)
                ->transformWith(new LayananTransformer)
                ->toArray();

            return response()->json([
                "message" => "Update Data Layanan Id " . $id_layanan . " Berhasil",
                $response

            ]);
        }

        return response()->json([
            "message" => "PUT Method With Id " . $id_layanan . " Not Found",
        ], 400);
    }

    public function delete(Layanan $layanan, $id_layanan)
    {
        $layanan = Layanan::where('id_layanan', $id_layanan)->first();
        if ($layanan) {
            $layanan->delete();
            return response()->json([
                "message" => "Layanan Id " . $id_layanan . " Deleted",
            ]);
        }
        return response()->json([
            "message" => "Layanan Id " . $id_layanan . " Not Found",
        ], 400);
    }
}
