<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'character_id' => 1,
                'select_game_id' => 1,
                'difficulty' => "hard",
            ],
            [
                'character_id' => 2,
                'select_game_id' => 1,
                'difficulty' => "medium",
            ],
            [
                'character_id' => 3,
                'select_game_id' => 1,
                'difficulty' => "easy",
            ],
        ]);
    }
}
