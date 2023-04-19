<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characters_images')->insert([
            [
                'name' => "default",
                'image' => "http://localhost:8000/images/default.png",
            ],
            [
                'name' => "f1",
                'image' => "http://localhost:8000/images/f1.png",
            ],
            [
                'name' => "m1",
                'image' => "http://localhost:8000/images/m1.png",
            ],
        ]);
    }
}
