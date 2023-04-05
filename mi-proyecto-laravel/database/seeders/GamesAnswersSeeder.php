<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games_answers')->insert([
            [
                'game_id' => 1,
                'answer_id' => 1,
            ],
            [
                'game_id' => 1,
                'answer_id' => 2,
            ],
            [
                'game_id' => 2,
                'answer_id' => 1,
            ],
            [
                'game_id' => 2,
                'answer_id' => 3,
            ],
            [
                'game_id' => 3,
                'answer_id' => 1,
            ],
            [
                'game_id' => 3,
                'answer_id' => 4,
            ],
        ]);
    }
}
