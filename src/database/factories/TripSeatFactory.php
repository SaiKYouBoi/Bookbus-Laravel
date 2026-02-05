<?php

namespace Database\Factories;

use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TripSeat>
 */
class TripSeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trip_id' => Trip::inRandomOrder()->value('id'),
            'seat_id' => Seat::inRandomOrder()->value('id'),
        ];
    }
}
