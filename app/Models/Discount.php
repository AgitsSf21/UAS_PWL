<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable=[
        'discount',
        'image',
        'date',
        'name',
        'deskripsi',
        'old_price',
        'new_price'
    ];

    public function GetDiscount(){
        return Discount::first();
    }

}
