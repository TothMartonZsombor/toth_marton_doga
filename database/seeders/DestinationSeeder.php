<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Destination::factory()->count(100)->create();
    }
}
