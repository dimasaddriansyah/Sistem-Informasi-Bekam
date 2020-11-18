<?php

namespace App\Http\Controllers;

use App\Mitra;
use App\Pelanggan;
use App\SuperAdmin;
use App\Transformers\MitraTransformer;
use App\Transformers\PelangganTransformer;
use App\Transformers\SuperAdminTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request, Pelanggan $pelanggan, Mitra $mitra, SuperAdmin $superadmin)
    {
        if (Auth::guard('pelanggan')->attempt(['email' => $request->email, 'password' => $request->password])) {

            $pelanggan = $pelanggan->find(Auth::guard('pelanggan')->user()->id_pelanggan);
            return fractal()
                ->item($pelanggan)
                ->transformWith(new PelangganTransformer)
                ->addMeta([
                    'token' => $pelanggan->api_token,
                ])
                ->toArray();
        } else if (Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password])) {

            $mitra = $mitra->find(Auth::guard('mitra')->user()->id_mitra);
            return fractal()
                ->item($mitra)
                ->transformWith(new MitraTransformer)
                ->addMeta([
                    'token' => $mitra->api_token,
                ])
                ->toArray();
        } else if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            $superadmin = $superadmin->find(Auth::guard('superadmin')->user()->id_superadmin);
            return fractal()
                ->item($superadmin)
                ->transformWith(new SuperAdminTransformer)
                ->addMeta([
                    'token' => $superadmin->api_token,
                ])
                ->toArray();
        } else {
            return response()->json(['error' => 'Email atau Password Salah'], 401);
        }
    }
}
