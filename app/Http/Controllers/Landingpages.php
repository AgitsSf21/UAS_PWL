<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukKami;
use App\Models\Discount;
use App\Models\News;
use App\Models\Produk;



class Landingpages extends Controller
{
    public function index(){
        return view('front-end/grosir/velaris',[
            'title'=>'Velaris',
            'produkkami'=> (new ProdukKami())->GetProdukKami(),
            'discount'=> (new Discount())->GetDiscount(),
            'news'=> (new News())->GetNews()
        ]);
    }

    public function about(){
        return view('front-end/grosir/about',[
            'title'=>'Velaris'
        ]);
    }

    public function contact(){
        return view('front-end/grosir/contact',[
            'title'=>'Velaris'
        ]);
    }

    public function news(){
        return view('front-end/grosir/news',[
            'title'=>'Velaris',
            'news'=> (new News())->GetNews()

        ]);
    }

    public function shop(){
        return view('front-end/grosir/shop',[
            'title'=>'Velaris',
            'shop'=> (new Produk())->GetProduk()
        ]);
    }
}

