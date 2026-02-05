<?php

namespace Database\Factories;

use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bus = Bus::inRandomOrder()->first();

        return [
            'name' => $this->faker->randomElement([
                'WiFi',
                'Air Conditioning',
                'Snacks',
                'Charging Ports',
                'Extra Luggage',
                'Reclining Seats',
            ]),
            'bus_id' => Bus::inRandomOrder()->value('id'),
        ];
    }
}
