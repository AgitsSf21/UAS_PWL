<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukKami extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'jenis_barang',
        'deskripsi',
        'price'
    ];

    public function GetProdukKami(){
        return ProdukKami::all();
    }
}
