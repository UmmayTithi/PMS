<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductTableSeeder;
use Database\Seeders\CustomerTaableSeeder;
use Database\Seeders\UserTaableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ProductTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(UserTableSeeder::class);

    }
}
