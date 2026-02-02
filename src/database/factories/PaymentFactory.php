<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'amount' => fake()->randomFloat(2, 50, 500),
            'payment_method' => fake()->randomElement(['card', 'cash', 'online']),
            'status' => fake()->randomElement(['pending', 'completed']),
            'paid_at' => now(),
        ];
    }
}
