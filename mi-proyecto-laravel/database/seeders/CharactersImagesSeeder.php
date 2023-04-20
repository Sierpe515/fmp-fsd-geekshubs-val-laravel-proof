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
                'name' => "f2",
                'image' => "http://localhost:8000/images/f2.png",
            ],
            [
                'name' => "f3",
                'image' => "http://localhost:8000/images/f3.png",
            ],
            [
                'name' => "f4",
                'image' => "http://localhost:8000/images/f4.png",
            ],
            [
                'name' => "f5",
                'image' => "http://localhost:8000/images/f5.png",
            ],
            [
                'name' => "f6",
                'image' => "http://localhost:8000/images/f6.png",
            ],
            [
                'name' => "f7",
                'image' => "http://localhost:8000/images/f7.png",
            ],
            [
                'name' => "f8",
                'image' => "http://localhost:8000/images/f8.png",
            ],
            [
                'name' => "f9",
                'image' => "http://localhost:8000/images/f9.png",
            ],
            [
                'name' => "f10",
                'image' => "http://localhost:8000/images/f10.png",
            ],
            [
                'name' => "f11",
                'image' => "http://localhost:8000/images/f11.png",
            ],
            [
                'name' => "m1",
                'image' => "http://localhost:8000/images/m1.png",
            ],
            [
                'name' => "m2",
                'image' => "http://localhost:8000/images/m2.png",
            ],
            [
                'name' => "m3",
                'image' => "http://localhost:8000/images/m3.png",
            ],
            [
                'name' => "m4",
                'image' => "http://localhost:8000/images/m4.png",
            ],
            [
                'name' => "m5",
                'image' => "http://localhost:8000/images/m5.png",
            ],
            [
                'name' => "m6",
                'image' => "http://localhost:8000/images/m6.png",
            ],
            [
                'name' => "m7",
                'image' => "http://localhost:8000/images/m7.png",
            ],
            [
                'name' => "m8",
                'image' => "http://localhost:8000/images/m8.png",
            ],
            [
                'name' => "m9",
                'image' => "http://localhost:8000/images/m9.png",
            ],
            [
                'name' => "m10",
                'image' => "http://localhost:8000/images/m10.png",
            ],
            [
                'name' => "m11",
                'image' => "http://localhost:8000/images/m11.png",
            ],
        ]);
    }
}
