<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'no_barang',
        'nama_barang',
        'varian',
        'tanggal_kadaluarsa',
        'tanggal_produksi',
        'harga_beli',
    ];
}
