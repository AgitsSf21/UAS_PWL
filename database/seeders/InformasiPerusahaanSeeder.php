<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InformasiPerusahaan;

class InformasiPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InformasiPerusahaan::create([
            'alamat' => 'jln Industri
Purwakarta, Jawa barat
Indonesia',
            'phone_number' => 6285559789583,
            'email' => 'agitssyuhada07@wastukancana.ac.id',

        ]);
    }
}
