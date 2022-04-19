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

        $this->call(UserTableSeeder::class);

    }
}
