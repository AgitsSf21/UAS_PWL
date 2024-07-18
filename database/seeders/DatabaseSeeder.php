<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProdukKamiSeeder::class,
            TestimoniSeeder::class,
            DiscountSeeder::class,
            InformasiPerusahaanSeeder::class,
            ProdukSeeder::class,
            RoleSeeder::class,
            NewsSeeder::class
        ]);


    }
}
