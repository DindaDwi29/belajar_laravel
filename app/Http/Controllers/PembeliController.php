<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function data()
    {

        $beli = Pembeli::all();

        return view('pembeli', compact('beli'));

    }
}
