<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductKami;
use App\Http\Controllers\Controller;
use App\Models\ProdukKami;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduckKamiController extends Controller
{
    public function index()
    {
        return view('admin.produkKami.index', [
            'title' => 'Produk Kami',
            'productkami' => (new ProdukKami())->GetProdukKami()
        ]);
    }

    public function create()
    {
        return view('admin.produkKami.create', [
            'title' => 'Add Produk Kami',
        ]);
    }

    public function store(ProductKami $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('jenis_produk');
        }
        ProdukKami::create($data);
        return redirect()->route('product-kami.index')->with('success', 'Create Product Success');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.produkKami.edit', [
            'title' => 'Edit Produk Kami',
            'productkami' => ProdukKami::find($id)
        ]);
    }

    public function update(ProductKami $request, $id)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('jenis_produk');
        }
        ProdukKami::where('id', $id)->update($data);
        return redirect()->route('product-kami.index')->with('success', 'Update Product Success');
    }

    public function destroy($id)
    {
        $productkami = ProdukKami::find($id);
        ProdukKami::destroy($id);
        if ($productkami->image) {
            Storage::delete($productkami->image);
        }
        return redirect()->route('product-kami.index')->with('success', 'Delete Product Success');
    }
}
