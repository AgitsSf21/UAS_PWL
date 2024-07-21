<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\models\Produk;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'category'
    ];

    public function Getcategory(){
        return Category::all();
    }

    public function produk(){
        $this->hasMany(Produk::class);
    }




}
