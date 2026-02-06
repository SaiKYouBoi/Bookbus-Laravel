<?php

namespace Database\Factories;

use App\Models\RouteStop;
use App\Models\Trip;
use App\Models\TripSegment;
use Carbon\Carbon;
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

        $trip = Trip::inRandomOrder()->first();

        // Safety: no trip found
        if (!$trip) {
            return [];
        }

        $stops = RouteStop::where('route_id', $trip->route_id)
            ->orderBy('stop_order')
            ->get();

        // Safety: not enough stops to create a segment
        if ($stops->count() < 2) {
            return [];
        }

        // Pick valid from & to stops
        $fromIndex = rand(0, $stops->count() - 2);
        $toIndex = rand($fromIndex + 1, $stops->count() - 1);

        $fromStop = $stops[$fromIndex];
        $toStop = $stops[$toIndex];

        // Ensure Carbon instances
        $departureTime = Carbon::parse($trip->departure_time);
        $arrivalTime = Carbon::parse($trip->arrival_time);

        $tripDuration = $arrivalTime->timestamp - $departureTime->timestamp;

        $segmentDuration = (($toIndex - $fromIndex) / ($stops->count() - 1)) * $tripDuration;

        $segmentDeparture = (clone $departureTime)
            ->addSeconds((($fromIndex) / ($stops->count() - 1)) * $tripDuration);

        $segmentArrival = (clone $segmentDeparture)
            ->addSeconds($segmentDuration);

        return [
            'trip_id' => $trip->id,
            'from_stop_id' => $fromStop->id,
            'to_stop_id' => $toStop->id,
            'departure_time' => $segmentDeparture,
            'arrival_time' => $segmentArrival,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'discount' => $this->faker->randomFloat(2, 0, 20),
        ];
    }

}
