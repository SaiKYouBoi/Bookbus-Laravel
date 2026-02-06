<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function search(Request $request){
        $departureCityId = $request->input('departure_city_id');
        $arrivalCityId = $request->input('arrival_city_id');
        $departureDate = $request->input('departure_date');

        $trips = Trip::whereHas('segments', function ($query) use ($departureCityId, $arrivalCityId) {

            // From city
            $query->whereHas('fromStop.station.city', function ($q) use ($departureCityId) {
                $q->where('id', $departureCityId);
            })

                // To city
                ->whereHas('toStop.station.city', function ($q) use ($arrivalCityId) {
                    $q->where('id', $arrivalCityId);
                });

        })
            ->whereDate('departure_time', Carbon::parse($departureDate))
            ->with([
                'segments.fromStop.station.city',
                'segments.toStop.station.city','company'
            ])
            ->get();

        $cities = City::orderBy('name')->get();

        return view('trips', compact('trips'), compact('cities'));
    }
}