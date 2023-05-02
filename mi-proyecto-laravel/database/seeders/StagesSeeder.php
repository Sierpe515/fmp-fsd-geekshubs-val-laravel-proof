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
                'name' => "Turks city",
                'code' => "2-1",
            ],
            [
                'name' => "Izakura",
                'code' => "3-1",
            ],
            [
                'name' => "Floating Islands",
                'code' => "3-2",
            ],
            [
                'name' => "Darkest dungeon",
                'code' => "3-3",
            ],
            [
                'name' => "Transildream",
                'code' => "4-1",
            ],
            [
                'name' => "Netherland",
                'code' => "4-2",
            ],
            [
                'name' => "Bahava",
                'code' => "4-3",
            ],
            [
                'name' => "Ghostship",
                'code' => "5-1",
            ],
            [
                'name' => "Mouse in the forest",
                'code' => "5-2",
            ],
            [
                'name' => "The dam",
                'code' => "5-3",
            ],
            [
                'name' => "Cattegat",
                'code' => "6-1",
            ],
            [
                'name' => "Goat dungeon",
                'code' => "6-2",
            ],
            [
                'name' => "the judgment of death",
                'code' => "6-3",
            ],
            [
                'name' => "Final1",
                'code' => "7-1",
            ],
            [
                'name' => "Final2",
                'code' => "7-2",
            ],
            [
                'name' => "Final3",
                'code' => "7-3",
            ],
        ]);
    }
}
