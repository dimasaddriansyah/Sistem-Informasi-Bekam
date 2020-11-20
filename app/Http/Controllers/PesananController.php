<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;
use App\Mitra;
use App\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $mitra = Mitra::get();
        $layanan = Layanan::get();
        $pesanan = Pesanan::get();
        return view('mitra.index', compact('mitra', 'layanan', 'pesanan'));
    }
}
