<?php

namespace App\Http\Controllers;

use App\Mitra;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home()
    {
        $mitra = Mitra::all();

        return view('welcome', compact('mitra'));
    }
}
