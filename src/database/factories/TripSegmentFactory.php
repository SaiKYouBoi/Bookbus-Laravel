<?php

namespace Database\Factories;

use App\Models\RouteStop;
use App\Models\Trip;
use App\Models\TripSegment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TripSegment>
 */
class TripSegmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TripSegment::class;

    public function definition()
    {
        // Pick a random trip
        $trip = Trip::inRandomOrder()->first();

        // Get all stops for the trip's route, ordered by stop_order
        $stops = RouteStop::where('route_id', $trip->route_id)
            ->orderBy('stop_order')
            ->get();

        // If less than 2 stops, cannot create a segment
        if ($stops->count() < 2) {
            return []; // or throw exception depending on your seeding strategy
        }

        // Pick a random "from" stop, ensure there is a "to" stop after it
        $fromIndex = rand(0, $stops->count() - 2);
        $toIndex = rand($fromIndex + 1, $stops->count() - 1);

        $fromStop = $stops[$fromIndex];
        $toStop = $stops[$toIndex];

        // Calculate departure and arrival times proportionally
        $tripDuration = $trip->arrival_time->getTimestamp() - $trip->departure_time->getTimestamp();
        $segmentDuration = ($toIndex - $fromIndex) / ($stops->count() - 1) * $tripDuration;

        $departure = (clone $trip->departure_time)->modify('+' . (($fromIndex) / ($stops->count() - 1) * $tripDuration) . ' seconds');
        $arrival = (clone $departure)->modify('+' . $segmentDuration . ' seconds');

        return [
            'trip_id' => $trip->id,
            'from_stop_id' => $fromStop->id,
            'to_stop_id' => $toStop->id,
            'departure_time' => $departure,
            'arrival_time' => $arrival,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'discount' => $this->faker->randomFloat(2, 0, 20),
        ];
    }
}