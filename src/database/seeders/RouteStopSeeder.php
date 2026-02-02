<?php

namespace Database\Seeders;

use App\Models\RouteStop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RouteStop::factory()->count(30)->create();
    }
}
