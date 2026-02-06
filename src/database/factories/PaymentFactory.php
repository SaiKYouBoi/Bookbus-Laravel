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
    protected static $usedBookingIds = [];
    public function definition(): array
    {
        $booking = Booking::whereNotIn('id', self::$usedBookingIds)
            ->inRandomOrder()
            ->first();

        if (!$booking) {
            return [];
        }

        self::$usedBookingIds[] = $booking->id;
        return [
            'booking_id' => $booking->id,
            'amount' => fake()->randomFloat(2, 50, 500),
            'payment_method' => fake()->randomElement(['card', 'cash', 'online']),
            'status' => fake()->randomElement(['pending', 'completed']),
            'paid_at' => now(),
        ];
    }
}