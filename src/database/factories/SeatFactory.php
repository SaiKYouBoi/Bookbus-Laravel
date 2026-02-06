<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        static $seatNumber = 1;

        return [
            'seat_number' => $seatNumber++,
        ];
    }
}
