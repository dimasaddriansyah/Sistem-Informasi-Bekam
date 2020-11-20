<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Transformers\PelangganTransformer;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PelangganController extends Controller
{
    public function Pelanggan(Pelanggan $pelanggan)
    {
        $pelanggan = Pelanggan::all();

        return fractal()
            ->collection($pelanggan)
            ->transformWith(new PelangganTransformer)
            ->toArray();
    }

    public function PelangganById(Pelanggan $pelanggan, $id_pelanggan)
    {
        $pelanggan = $pelanggan::where('id_pelanggan', $id_pelanggan)->first();

        return fractal()
        ->item($pelanggan)
        ->transformWith(new PelangganTransformer)
        ->includePesanan()
        ->toArray();
    }

    public function registerPelanggan(Request $request, Pelanggan $pelanggan)
    {
        $this->validate($request, [
            'nama'      =>  'required|min:5',
            'email'     =>  'required|email|unique:pelanggan',
            'password'  =>  'required|min:6',
            'alamat'    =>  'required|min:6',
            'no_hp'     =>  'required|min:6',
        ]);

        $pelanggan = $pelanggan->create([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'api_token'     => bcrypt($request->email),
            'alamat'        => $request->alamat,
            'no_hp'         => $request->no_hp,
        ]);

        $response = fractal()
            ->item($pelanggan)
            ->transformWith(new PelangganTransformer)
            ->addMeta([
                'token' => $pelanggan->api_token,
            ])
            ->toArray();

        return response()->json($response, 201);
    }

    public function indexPelanggan(Pelanggan $pelanggan)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://127.0.0.1:8000/api/pelanggan');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode($body, true);

        return view('indexPelanggan', compact('data'));
    }
}
