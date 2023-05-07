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
                'image' => "https://laravel-proof-production.up.railway.app/images/default.png",
            ],
            [
                'name' => "f1",
                'image' => "https://laravel-proof-production.up.railway.app/images/f1.png",
            ],
            [
                'name' => "f2",
                'image' => "https://laravel-proof-production.up.railway.app/images/f2.png",
            ],
            [
                'name' => "f3",
                'image' => "https://laravel-proof-production.up.railway.app/images/f3.png",
            ],
            [
                'name' => "f4",
                'image' => "https://laravel-proof-production.up.railway.app/images/f4.png",
            ],
            [
                'name' => "f5",
                'image' => "https://laravel-proof-production.up.railway.app/images/f5.png",
            ],
            [
                'name' => "f6",
                'image' => "https://laravel-proof-production.up.railway.app/images/f6.png",
            ],
            [
                'name' => "f7",
                'image' => "https://laravel-proof-production.up.railway.app/images/f7.png",
            ],
            [
                'name' => "f8",
                'image' => "https://laravel-proof-production.up.railway.app/images/f8.png",
            ],
            [
                'name' => "f9",
                'image' => "https://laravel-proof-production.up.railway.app/images/f9.png",
            ],
            [
                'name' => "f10",
                'image' => "https://laravel-proof-production.up.railway.app/images/f10.png",
            ],
            [
                'name' => "f11",
                'image' => "https://laravel-proof-production.up.railway.app/images/f11.png",
            ],
            [
                'name' => "f12",
                'image' => "https://laravel-proof-production.up.railway.app/images/f12.png",
            ],
            [
                'name' => "f13",
                'image' => "https://laravel-proof-production.up.railway.app/images/f13.png",
            ],
            [
                'name' => "f14",
                'image' => "https://laravel-proof-production.up.railway.app/images/f14.png",
            ],
            [
                'name' => "m1",
                'image' => "https://laravel-proof-production.up.railway.app/images/m1.png",
            ],
            [
                'name' => "m2",
                'image' => "https://laravel-proof-production.up.railway.app/images/m2.png",
            ],
            [
                'name' => "m3",
                'image' => "https://laravel-proof-production.up.railway.app/images/m3.png",
            ],
            [
                'name' => "m4",
                'image' => "https://laravel-proof-production.up.railway.app/images/m4.png",
            ],
            [
                'name' => "m5",
                'image' => "https://laravel-proof-production.up.railway.app/images/m5.png",
            ],
            [
                'name' => "m6",
                'image' => "https://laravel-proof-production.up.railway.app/images/m6.png",
            ],
            [
                'name' => "m7",
                'image' => "https://laravel-proof-production.up.railway.app/images/m7.png",
            ],
            [
                'name' => "m8",
                'image' => "https://laravel-proof-production.up.railway.app/images/m8.png",
            ],
            [
                'name' => "m9",
                'image' => "https://laravel-proof-production.up.railway.app/images/m9.png",
            ],
            [
                'name' => "m10",
                'image' => "https://laravel-proof-production.up.railway.app/images/m10.png",
            ],
            [
                'name' => "m11",
                'image' => "https://laravel-proof-production.up.railway.app/images/m11.png",
            ],
            [
                'name' => "m12",
                'image' => "https://laravel-proof-production.up.railway.app/images/m12.png",
            ],
            [
                'name' => "m13",
                'image' => "https://laravel-proof-production.up.railway.app/images/m13.png",
            ],
        ]);
    }
}
