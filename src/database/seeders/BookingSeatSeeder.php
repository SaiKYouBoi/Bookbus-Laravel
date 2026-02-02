<?php

namespace Database\Seeders;

use App\Models\BookingSeat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookingSeat::factory()->count(60)->create();
    }
}
