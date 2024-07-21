<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'image' => 'News/sepatu.jpeg',
            'jenis_barang' => 'FASHION KEKINIAN',
            'deskripsi' => 'Hadapi kota dengan gaya dengan Sepatu Keren "UrbanStride" dari koleksi terbaru kami. Sepatu ini tidak hanya menawarkan tampilan yang trendi namun juga kenyamanan luar biasa untuk menemani langkah Anda sepanjang hari.',

        ]);

        News::create([
            'image' => 'News/Elektronik.png',
            'jenis_barang' => 'Barang Elektronik Minimasil Dan Efesien.',
            'deskripsi' => 'Melangkah ke masa depan dengan gadget elektronik mutakhir kami yang dirancang untuk meningkatkan kehidupan sehari-hari Anda.',

        ]);

        News::create([
            'image' => 'News/furniture.png',
            'jenis_barang' => 'Barang Rumah Tangga Minimalis Berkualitas',
            'deskripsi' => 'Panci presto Chef s Choice adalah pilihan terbaik untuk memasak lebih cepat dan lebih efisien di dapur Anda. Dirancang dengan teknologi mutakhir, panci ini menggabungkan kualitas premium dengan keamanan yang tak tertandingi.',

        ]);

        News::create([
            'image' => 'News/kosmetik.png',
            'jenis_barang' => 'Kosmetik Lokal',
            'deskripsi' => 'Raih pesona alami dengan rangkaian kosmetik lokal kami yang dirancang khusus untuk kulit wanita Indonesia. Menggabungkan bahan-bahan alami berkualitas dengan teknologi mutakhir, setiap produk kami diciptakan untuk memancarkan kecantikan sejati Anda.',

        ]);

        News::create([
            'image' => 'News/scincare.png',
            'jenis_barang' => 'ScinCare',
            'deskripsi' => 'rumah bagi rangkaian produk perawatan kulit lokal yang dirancang khusus untuk memenuhi kebutuhan unik kulit Anda. Kami bangga mempersembahkan formula alami yang dihasilkan dari kekayaan alam Indonesia, memberikan manfaat optimal dengan sentuhan tradisi dan inovasi.',

        ]);

        News::create([
            'image' => 'News/furniture.png',
            'jenis_barang' => 'Furniture Kualitas Dan Minimalis',
            'deskripsi' => 'destinasi Anda untuk furnitur lokal yang memadukan keindahan desain, kualitas tinggi, dan sentuhan seni tradisional. Kami bangga menghadirkan koleksi furnitur yang dirancang dengan penuh cinta dan keterampilan oleh pengrajin terbaik dari seluruh Indonesia.',

        ]);
    }
}
