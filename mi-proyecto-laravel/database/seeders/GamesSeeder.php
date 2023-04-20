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
                'guide' => 'legal',
                'madness' => 0,
                'finished' => false,
                'created_at' => "2023-04-15 14:52:14",
                'updated_at' => "2023-04-15 14:52:14"
            ],
            [
                'character_id' => 2,
                'select_game_id' => 1,
                'difficulty' => "medium",
                'guide' => 'chaotic',
                'madness' => 0,
                'finished' => false,
                'created_at' => "2023-04-15 14:52:14",
                'updated_at' => "2023-04-15 14:52:14"
            ],
            [
                'character_id' => 3,
                'select_game_id' => 1,
                'difficulty' => "easy",
                'guide' => 'legal',
                'madness' => 0,
                'finished' => false,
                'created_at' => "2023-04-15 14:52:14",
                'updated_at' => "2023-04-15 14:52:14"
            ],
        ]);
    }
}
