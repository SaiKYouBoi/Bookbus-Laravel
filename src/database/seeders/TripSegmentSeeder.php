<?php

namespace Database\Seeders;

use App\Models\TripSegment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TripSegment::factory()->count(40)->create();
    }
}
