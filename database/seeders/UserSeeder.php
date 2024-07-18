<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'Admin',
            'password'=>bcrypt('123'),
            'email'=>'admin@admin.com',
            'phone_number'=>'085559696310',
            'role_id'=>2
        ]);

        User::Create([
            'name'=>'Customer',
            'password'=>bcrypt('velaris321'),
            'email'=>'agitssyuhadafirdaus21@gmail.com',
            'phone_number'=>'085559696310',
            'role_id'=>3
        ]);
    }
}
