<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\RouteStop;
use App\Models\TripSeat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingSeat>
 */
class BookingSeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $booking = Booking::inRandomOrder()->first();


        $trip = $booking->trip;


        $stops = RouteStop::where('route_id', $trip->route_id)
                    ->orderBy('stop_order')
                    ->get();

        if ($stops->count() < 2) {
            return [];
        }

        $startIndex = rand(0, $stops->count() - 2);
        $endIndex = rand($startIndex + 1, $stops->count() - 1);

        $startStopOrder = $stops[$startIndex]->stop_order;
        $endStopOrder   = $stops[$endIndex]->stop_order;


        $tripSeat = TripSeat::where('trip_id', $trip->id)
                    ->inRandomOrder()
                    ->first();

        return [
            'booking_id'      => $booking->id,
            'trip_seat_id'    => $tripSeat->id,
            'start_stop_order'=> $startStopOrder,
            'end_stop_order'  => $endStopOrder,
        ];
    }
}