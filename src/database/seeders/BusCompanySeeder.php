<?php

namespace Database\Seeders;

use App\Models\BusCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusCompany::factory()->count(5)->create();
    }
}