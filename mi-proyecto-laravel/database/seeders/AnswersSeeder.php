<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('answers')->insert([
            [
                'stage_id' => 1,
                'answer' => "A",
                'badge_id' => 1,
            ],
            [
                'stage_id' => 1,
                'answer' => "B",
                'badge_id' => 1,
            ],
            [
                'stage_id' => 2,
                'answer' => "A",
                'badge_id' => 2,
            ],
            [
                'stage_id' => 2,
                'answer' => "B",
                'badge_id' => 1,
            ],
            [
                'stage_id' => 2,
                'answer' => "C",
                'badge_id' => 1,
            ],
        ]);
    }
}
