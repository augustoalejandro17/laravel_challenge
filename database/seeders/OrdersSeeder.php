<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'dish' => Str::random(10),
            'cost' => 0.99,
            'available' => true,
        ]);
        DB::table('orders')->insert([
            'dish' => Str::random(10),
            'cost' => 0.99,
            'available' => true,
        ]);
        DB::table('orders')->insert([
            'dish' => Str::random(10),
            'cost' => 0.99,
            'available' => true,
        ]);            
    }
}
