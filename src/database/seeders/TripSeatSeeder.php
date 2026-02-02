<?php

namespace Database\Seeders;

use App\Models\TripSeat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TripSeat::factory()->count(200)->create();
    }
}
