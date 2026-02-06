<?php

namespace Database\Factories;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),
            'trip_id' => Trip::inRandomOrder()->value('id'),
            'seats_booked' => fake()->numberBetween(1, 3),
            'total_price' => fake()->randomFloat(2, 50, 500),
            'status' => fake()->randomElement(['pending', 'paid','cancelled']),
            'booking_date' => now(),
        ];
    }
}
