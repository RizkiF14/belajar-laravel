<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }


    public function create()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_barang' => 'required',
            'nama_barang' => 'required|string',
            'varian' => 'required',
            'tanggal_kadaluarsa' => 'required|date',
            'tanggal_produksi' => 'required|date',
            'harga_beli' => 'required|numeric',
        ]);

        Barang::create($validatedData);

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil ditambahkan');
    }


    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_barang' => 'required',
            'nama_barang' => 'required|string',
            'varian' => 'required',
            'tanggal_kadaluarsa' => 'required|date',
            'tanggal_produksi' => 'required|date',
            'harga_beli' => 'required|numeric',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($validatedData);

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus');
    }
}
