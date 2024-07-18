<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukKami;

class ProdukKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProdukKami::create([
            'image' => 'jenis_produk/kaos.jpg',
            'jenis_barang' => 'T shirt premium Lokal',
            'deskripsi' => 'Temukan kesempurnaan dalam kesederhanaan dengan kaos polos premium kami. Dibuat dari bahan katun 100% berkualitas tinggi, kaos ini memberikan kenyamanan luar biasa yang terasa lembut di kulit.
',
            'price' => 40000

        ]);

        ProdukKami::create([
            'image' => 'jenis_produk/kosmetik.png',
            'jenis_barang' => 'Kosmetik Lokal',
            'deskripsi' => 'Raih pesona alami dengan rangkaian kosmetik lokal kami yang dirancang khusus untuk kulit wanita Indonesia. Menggabungkan bahan-bahan alami berkualitas dengan teknologi mutakhir, setiap produk kami diciptakan untuk memancarkan kecantikan sejati Anda.',
            'price' => 30000

        ]);

        ProdukKami::create([
            'image' => 'jenis_produk/charger.png',
            'jenis_barang' => 'Charger Lokal Berkualitas',
            'deskripsi' => 'Nikmati pengisian daya yang cepat dan aman dengan charger lokal berkualitas kami. Dirancang khusus untuk memenuhi kebutuhan gadget modern, charger ini menawarkan performa optimal tanpa mengorbankan keamanan.',
            'price' => 70000



        ]);
    }
}
