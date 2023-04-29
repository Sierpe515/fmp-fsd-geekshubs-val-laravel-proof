<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stages')->insert([
            [
                'name' => "Initial",
                'code' => "1-1",
            ],
            [
                'name' => "Sierpes",
                'code' => "2-1",
            ],
            [
                'name' => "Demons",
                'code' => "3-1",
            ],
            [
                'name' => "nose3-2",
                'code' => "3-2",
            ],
            [
                'name' => "nose3-3",
                'code' => "3-3",
            ],
            [
                'name' => "nose4-1",
                'code' => "4-1",
            ],
            [
                'name' => "nose4-2",
                'code' => "4-2",
            ],
            [
                'name' => "nose4-3",
                'code' => "4-3",
            ],
            [
                'name' => "nose5-1",
                'code' => "5-1",
            ],
            [
                'name' => "nose5-2",
                'code' => "5-2",
            ],
            [
                'name' => "nose5-3",
                'code' => "5-3",
            ],
            [
                'name' => "nose6-1",
                'code' => "6-1",
            ],
            [
                'name' => "nose6-2",
                'code' => "6-2",
            ],
            [
                'name' => "nose6-3",
                'code' => "6-3",
            ],
        ]);
    }
}
