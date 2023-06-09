<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('badges')->insert([
            [
            'name' => "None",
            'type' => "None",
            'image' => ""
            ],
            [
            'name' => "First Success",
            'type' => "Clue",
            'image' => "https://laravel-proof-production.up.railway.app/images/badges/b4.png"
            ],
            [
            'name' => "Final help",
            'type' => "Clue",
            'image' => "https://laravel-proof-production.up.railway.app/images/badges/b2.png"
            ],
        ]);
    }
}
