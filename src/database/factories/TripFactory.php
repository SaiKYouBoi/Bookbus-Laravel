<?php

namespace Database\Factories;

use App\Models\Bus;
use App\Models\Driver;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
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
            'route_id' => Route::inRandomOrder()->value('id'),
            'bus_id' => Bus::inRandomOrder()->value('id'),
            'driver_id' => Driver::inRandomOrder()->value('id'),
            'departure_time' => $departure,
            'arrival_time' => $arrival,
            'base_price' => fake()->randomFloat(2, 50, 300),
            'total_seats' => 40,
        ];
    }
}
