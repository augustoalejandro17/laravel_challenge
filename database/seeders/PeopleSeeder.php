<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => Str::random(10),
            'age' => 3.65,
            'isVip' => true,
        ]);

        DB::table('people')->insert(
        [
            'name' => Str::random(10),
            'age' => 3.20,
            'isVip' => true,
        ]);

        DB::table('people')->insert([
            'name' => Str::random(10),
            'age' => 3.20,
            'isVip' => true,
        ]);
    }
}
