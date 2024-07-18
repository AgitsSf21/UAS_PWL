<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.produk.index', [
            'title' => 'Product',
            'products' => (new Produk())->GetProdukDashboard()
        ]);
    }

    public function create()
    {
        return view('admin.produk.create', [
            'title' => 'Add Product',
        ]);
    }

    public function store(Product $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('product');
        }
        Produk::create($data);
        return redirect()->route('product.index')->with('success', 'Create Product Success');
    }

    public function show(Produk $produk)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.produk.edit', [
            'title' => 'Edit Product',
            'product' => Produk::find($id)
        ]);
    }

    public function update(Product $request, $id)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('product');
        }
        Produk::where('id', $id)->update($data);
        return redirect()->route('product.index')->with('success', 'Update Product Success');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        if ($produk->image) {
            Storage::delete($produk->image);
        }
        return redirect()->route('product.index')->with('success', 'Delete Product Success');
    }
}
