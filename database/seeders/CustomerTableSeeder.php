<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name'=>'tithi',
            // 'contact'=>746578,
            'contact'=>'hfgh@gmail.com',
            'email'=> 'jhgfdxbghjkljnb',
            'address'=> 'hgfdghjk',
            // 'address'=>'dhaka',
        ]);
        
        //
    }
}
