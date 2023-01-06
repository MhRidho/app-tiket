<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('beranda.beranda');
    }

    public function pesanTiket()
    {
        return view('beranda.pesan-tiket');
    }

    public function login()
    {
        return view('beranda.login');
    }
}
