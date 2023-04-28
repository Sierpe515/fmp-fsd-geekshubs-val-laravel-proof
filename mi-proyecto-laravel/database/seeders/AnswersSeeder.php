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
                'success' => "Yes"
            ],
            [
                'stage_id' => 1,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 2,
                'answer' => "A",
                'badge_id' => 2,
                'success' => "Yes"
            ],
            [
                'stage_id' => 2,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 2,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 3,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "Yes"
            ],
            [
                'stage_id' => 3,
                'answer' => "A",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 3,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 4,
                'answer' => "A",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 4,
                'answer' => "B",
                'badge_id' => 2,
                'success' => "Yes"
            ],
            [
                'stage_id' => 4,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 5,
                'answer' => "A",
                'badge_id' => 2,
                'success' => "Yes"
            ],
            [
                'stage_id' => 5,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 5,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 6,
                'answer' => "A",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 6,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "Yes"
            ],
            [
                'stage_id' => 6,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 7,
                'answer' => "A",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 7,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "Yes"
            ],
            [
                'stage_id' => 7,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 8,
                'answer' => "A",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 8,
                'answer' => "B",
                'badge_id' => 1,
                'success' => "No"
            ],
            [
                'stage_id' => 8,
                'answer' => "C",
                'badge_id' => 1,
                'success' => "Yes"
            ],
        ]);
    }
}
