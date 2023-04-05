<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters')->insert([
            [
                'user_id' => 1,
                'name' => "Sierpe",
                'gender' => "male",
            ],
            [
                'user_id' => 2,
                'name' => "Evra",
                'gender' => "female",
            ],
            [
                'user_id' => 3,
                'name' => "Thing",
                'gender' => "undefined",
            ],
        ]);
    }
}
