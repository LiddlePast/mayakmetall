<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           ['name' => 'Matvey Makhanov', 'email' => 'mtvmakhanov@gmail.com', 'password' => Hash::make('alkatras123'), 'role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
           ['name' => 'Ivan Ivanov', 'email' => 'ivanovivan@gmail.com', 'password' => Hash::make('adminnotivan'), 'role' => 'user', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
