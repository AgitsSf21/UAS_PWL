<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::create([
            'discount' => '30%',
            'image' => 'discount/kaosputih.jpg',
            'date' => 'Kesepakatan bulan ini',
            'name' => 'KAOS POLOS LOKAL PREMIUM',
            'deskripsi' => 'Rasakan kenyamanan dan kualitas terbaik dengan kaos polos lokal kami. Terbuat dari bahan katun premium, kaos ini lembut di kulit dan tahan lama. Desain sederhana namun elegan, cocok untuk segala aktivitas Anda.',
            'old_price' => 40000,
            'new_price' => 30000

        ]);
    }
}
