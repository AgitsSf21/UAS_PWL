<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukKami;
use App\Models\Discount;
use App\Models\News;
use App\Models\Produk;
use App\Models\InformasiPerusahaan;
use App\Models\Category;



class Landingpages extends Controller
{
    public function index(){
        return view('front-end/grosir/velaris',[
            'title'=>'Velaris',
            'produkkami'=> (new ProdukKami())->GetProdukKami(),
            'discount'=> (new Discount())->GetDiscount(),
            'news'=> (new News())->GetNews(),
            'info' => (new InformasiPerusahaan())->getInformasiPerusahaan()
        ]);
    }

    public function about(){
        return view('front-end/grosir/about',[
            'title'=>'Velaris',
            'info' => (new InformasiPerusahaan())->getInformasiPerusahaan()
        ]);
    }

    public function contact(){
        return view('front-end/grosir/contact',[
            'title'=>'Velaris',
            'info' => (new InformasiPerusahaan())->getInformasiPerusahaan()
        ]);
    }

    public function news(){
        return view('front-end/grosir/news',[
            'title'=>'Velaris',
            'news'=> (new News())->GetNews(),
            'info' => (new InformasiPerusahaan())->getInformasiPerusahaan()
        ]);
    }

    public function shop(){
        return view('front-end/grosir/shop',[
            'title'=>'Velaris',
            'products'=> (new Produk())->GetProduk(),
            'info' => (new InformasiPerusahaan())->getInformasiPerusahaan(),
            'category' => (new Category())->getCategory()
        ]);
    }
}

