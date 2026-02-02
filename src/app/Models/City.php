<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    public function departureBookings()
    {
        return $this->hasMany(Booking::class, 'departure_city_id');
    }

    public function arrivalBookings()
    {
        return $this->hasMany(Booking::class, 'arrival_city_id');
    }
}