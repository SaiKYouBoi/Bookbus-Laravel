<?php

namespace Database\Factories;

use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Bus::class;

    public function definition()
    {
        $statuses = ['active', 'maintenance', 'retired'];

        return [
            'fleet_code' => 'BUS-' . $this->faker->unique()->numberBetween(1, 999),
            'plate_number' => strtoupper($this->faker->unique()->bothify('???-###-??')),
            'model' => $this->faker->randomElement(['Volvo 9800', 'Mercedes Tourismo', 'Scania Touring']),
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
