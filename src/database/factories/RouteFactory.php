<?php

namespace Database\Factories;

use App\Models\BusCompany;
use App\Models\Driver;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departure = fake()->dateTimeBetween('+1 days', '+1 month');
        $arrival = (clone $departure)->modify('+3 hours');

        return [
            'route_id' => Route::factory(),
            'company_id' => BusCompany::factory(),
            'driver_id' => Driver::factory(),
            'departure_time' => $departure,
            'arrival_time' => $arrival,
            'base_price' => fake()->randomFloat(2, 50, 300),
            'total_seats' => 40,
        ];
    }
}
