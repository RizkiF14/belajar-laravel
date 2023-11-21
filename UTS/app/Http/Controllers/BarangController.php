<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function create()
    {
        return view('input_barang');
    }

    public function process(Request $request)
    {
        $barang = Barang::create($request->all());

        $totalHarga = $barang->qty * $barang->harga_jual;
        $diskon = 0;

        if ($totalHarga >= 500000) {
            $diskon = 0.5;
        } elseif ($totalHarga >= 200000) {
            $diskon = 0.2;
        } elseif ($totalHarga >= 100000) {
            $diskon = 0.1;
        }

        $hargaSetelahDiskon = $totalHarga * (1 - $diskon);

        return view('output_barang', compact('barang', 'totalHarga', 'diskon', 'hargaSetelahDiskon'));
    }
}
