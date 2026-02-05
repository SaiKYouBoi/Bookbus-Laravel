<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Seat;
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
    protected $model = Station::class;

    public function definition()
    {
        // Pick a random city from the database
        $city = City::inRandomOrder()->first();

        return [
            'city_id' => $city->id,
            'name' => $this->faker->company . ' Station',
            'address' => $this->faker->address,
        ];
    }
}
