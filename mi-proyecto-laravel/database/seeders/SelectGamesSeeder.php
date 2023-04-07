<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelectGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('select_games')->insert([
            [
                'name' => "Oniria",
                'isActive' => true,
            ],
            [
                'name' => "Tic Tac Toe",
                'isActive' => false,
            ],
            [
                'name' => "Los Cofres de Portia",
                'isActive' => false,
            ],
        ]);
    }
}
