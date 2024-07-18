<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimoni;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimoni::create([
            'name' => 'Agits Syuhada Firdaus',
            'role' => 'Costumer',
            'coment' => 'Toko grosir terbaik! Harganya sangat terjangkau dan produk-produk yang ditawarkan berkualitas tinggi. Sangat recommended!'

        ]);

        Testimoni::create([
            'name' => 'Danny',
            'role' => 'Costumer',
            'coment' => 'Sangat puas dengan pelayanan di sini! Stafnya ramah dan responsif, semua kebutuhan saya terpenuhi dengan cepat. Pasti akan kembali lagi!'

        ]);

        Testimoni::create([
            'name' => 'Rheina Fairuz',
            'role' => 'Costumer',
            'coment' => 'Banyak diskon dan promosi menarik di toko ini. Selalu ada penawaran spesial yang menguntungkan pelanggan. Sangat hemat!'

        ]);
    }
}
