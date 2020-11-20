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
use SweetAlert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginPost(Request $request, Pelanggan $pelanggan)
    {
        if (Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            alert()->basic('Anda Login Sebagai Super Admin', 'Hello');
            return redirect()->intended('/superadmin/index');
        } else if (Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password])) {
            alert()->basic('Anda Login Sebagai Mitra', 'Hello');
            return redirect()->intended('/mitra/index');
        } else if(Auth::guard('pelanggan')->attempt(['email' => $request->email, 'password' => $request->password])){
            $pelanggan = $pelanggan->find(Auth::guard('pelanggan')->user()->id_pelanggan);
            return fractal()
                ->item($pelanggan)
                ->transformWith(new PelangganTransformer)
                ->addMeta([
                    'token' => $pelanggan->api_token,
                ])
                ->toArray();
        }else {
            return redirect('/login')->with('alert', 'Email atau Password Salah !');
        }
    }

    public function logout()
    {
        if (Auth::guard('superadmin')->check()) {
            Auth::guard('superadmin')->logout();
        } elseif (Auth::guard('mitra')->check()) {
            Auth::guard('mitra')->logout();
        }

        return redirect('/login');
    }
}
