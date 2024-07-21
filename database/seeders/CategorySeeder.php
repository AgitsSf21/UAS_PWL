<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category' => 'All'
        ]);

        Category::create([
            'category' => 'Fashion'
        ]);

        Category::create([
            'category' => 'Elektronik'
        ]);

        Category::create([
            'category' => 'Furniture'
        ]);
    }

}
