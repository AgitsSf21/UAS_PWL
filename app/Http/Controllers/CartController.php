<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiPerusahaan;

class CartController extends Controller
{
    public function index()
    {
        return view('front-end/grosir/cart/index', [
            'title'=>'velaris',
            'info' => (new InformasiPerusahaan())->getInformasiPerusahaan()
        ]);

    }
}
