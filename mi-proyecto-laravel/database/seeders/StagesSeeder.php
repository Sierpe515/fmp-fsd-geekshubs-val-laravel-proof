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
                'name' => "Entrance",
                'code' => "2-1",
            ],
            [
                'name' => "Fail1",
                'code' => "3-1",
            ],
            [
                'name' => "Success",
                'code' => "3-2",
            ],
            [
                'name' => "Fail2",
                'code' => "3-3",
            ],
        ]);
    }
}
