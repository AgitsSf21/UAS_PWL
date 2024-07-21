<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'image' => NULL,
            'nama_barang' => 'Kaos Polos Lokal Premium',
            'deskripsi' => NULL,
            'price' => 30000,
            'category_id' => 2,



        ]);

        Produk::create([
            'image' => NULL,
            'nama_barang' => 'INIU Portable Charger, 20W PD3_0 QC4 0 Fast Charging',
            'deskripsi' => NULL,
            'price' => 100000,
            'category_id' => 3,



        ]);

        Produk::create([
            'image' => NULL,
            'nama_barang' => 'Kursi Makan Restoran Jok Minimalis - Sarana Mulya ®',
            'deskripsi' => NULL,
            'price' => 60000,
            'category_id' => 4,



        ]);

        Produk::create([
            'image' => NULL,
            'nama_barang' => 'Mejas Minimalis',
            'deskripsi' => '',
            'price' => 150000,
            'category_id' => 4,



        ]);

        Produk::create([
            'image' => NULL,
            'nama_barang' => 'Panda Nike Dunks',
            'deskripsi' => NULL,
            'price' => 1500000,
            'category_id' => 2,



        ]);

        Produk::create([
            'image' => NULL,
            'nama_barang' => 'Lemari Minimalis',
            'deskripsi' => NULL,
            'price' => 300000,
            'category_id' => 4,



        ]);
    }
}
