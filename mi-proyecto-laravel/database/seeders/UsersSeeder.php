<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'userName' => "Sierpe",
                'email' => "fernando@fernando.com",
                'email_verified_at' => now(),
                'password' => bcrypt("ClaveFalsa1"),
                'remember_token' => Str::random(10)
            ],
            [
                'role_id' => 2,
                'userName' => "Witcher",
                'email' => "witcher@witcher.com",
                'email_verified_at' => now(),
                'password' => bcrypt("ClaveFalsa1"),
                'remember_token' => Str::random(10)
            ],
            [
                'role_id' => 2,
                'userName' => "True Knight",
                'email' => "true@true.com",
                'email_verified_at' => now(),
                'password' => bcrypt("ClaveFalsa1"),
                'remember_token' => Str::random(10)
            ],
        ]);
    }
}
