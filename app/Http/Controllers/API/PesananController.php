<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Pesanan;
use App\Transformers\PesananTransformer;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index(Pesanan $pesanan)
    {
        $pesanan = $pesanan->all();

        return fractal()
            ->collection($pesanan)
            ->transformWith(new PesananTransformer)
            ->toArray();
    }

    public function indexById(Pesanan $pesanan, $id_pesanan)
    {
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->first();

        if ($pesanan) {
            return fractal()
                ->item($pesanan)
                ->transformWith(new PesananTransformer)
                ->toArray();
        }

        return response()->json([
            "message" => "PUT Method With Id " . $id_pesanan . " Not Found",
        ], 400);
    }

    public function add(Request $request, Pesanan $pesanan)
    {
        $this->validate(
            $request,
            [
                'bukti_pembayaran'  => 'required|mimes:png,jpg',


            ],
            [
                'bukti_pembayaran.required' => 'Harus Mengisi Bagian Bukti Pembayaran !',
            ]
        );

        $pesanan = $pesanan->create([
            'id_pelanggan'        => $request->id_pelanggan,
            'id_layanan'          => $request->id_layanan,
            'bukti_pembayaran'    => $request->bukti_pembayaran,
            'tanggal'             => $request->tanggal,
            'status'              => 0,
        ]);

        $response = fractal()
            ->item($pesanan)
            ->transformWith(new PesananTransformer)
            ->toArray();


        return response()->json([
            $response,
            "message" => "Tambah Data Pesanan Berhasil"
        ], 201);
    }

    public function update(Request $request, $id_pesanan)
    {
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->first();

        if ($pesanan) {
            $pesanan->id_pelanggan = $request->id_pelanggan ? $request->id_pelanggan : $pesanan->id_pelanggan;
            $pesanan->id_layanan = $request->id_layanan ? $request->id_layanan : $pesanan->id_layanan;
            $pesanan->bukti_pembayaran = $request->bukti_pembayaran ? $request->bukti_pembayaran : $pesanan->bukti_pembayaran;
            $pesanan->tanggal = $request->tanggal ? $request->tanggal : $pesanan->tanggal;
            $pesanan->status = $request->status ? $request->status : $pesanan->status;
            $pesanan->save();

            $response = fractal()
                ->item($pesanan)
                ->transformWith(new PesananTransformer)
                ->toArray();

            return response()->json([
                "message" => "Update Data Pesanan Id " . $id_pesanan . " Berhasil",
                $response

            ]);
        }

        return response()->json([
            "message" => "PUT Method With Id " . $id_pesanan . " Not Found",
        ], 400);
    }

    public function delete(Pesanan $pesanan, $id_pesanan)
    {
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->first();
        if ($pesanan) {
            $pesanan->delete();
            return response()->json([
                "message" => "Pesanan Id " . $id_pesanan . " Deleted",
            ]);
        }
        return response()->json([
            "message" => "Pesanan Id " . $id_pesanan . " Not Found",
        ], 400);
    }
}
