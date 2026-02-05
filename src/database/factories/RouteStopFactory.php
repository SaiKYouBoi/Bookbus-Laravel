<?php

namespace Database\Factories;

use App\Models\Route;
use App\Models\RouteStop;
use App\Models\Station;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RouteStop>
 */
class RouteStopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RouteStop::class;

    public function definition()
    {

        $route = Route::inRandomOrder()->first();

        $station = Station::inRandomOrder()->first();

        $lastStop = RouteStop::where('route_id', $route->id)
            ->orderBy('stop_order', 'desc')
            ->first();

        $stopOrder = $lastStop ? $lastStop->stop_order + 1 : 1;

        return [
            'route_id' => $route->id,
            'station_id' => $station->id,
            'stop_order' => $stopOrder,
        ];
    }
}