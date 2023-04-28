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
            'type' => "Normal",
            'image' => "http://localhost:8000/images/badges/b7.png"
            ],
        ]);
    }
}
