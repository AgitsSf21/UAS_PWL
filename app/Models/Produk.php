<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'nama_barang',
        'deskripsi',
        'price'
    ];

    public function GetProdukDashboard(){
        return Produk::paginate(5);
    }

    public function GetProduk(){
        return Produk::all();
    }

}
