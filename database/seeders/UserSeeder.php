<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //3 konkrét autó adatainak feltöltése
        DB::table('cars')->insert([
            [
                'name' => 'user1',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user1')
                
            ],
            [
                'name' => 'admin1',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin1')
            ]
            
        ]);
        //10 random autó adatainak feltöltése
        User::factory()->count(50)->create();
    }
}
