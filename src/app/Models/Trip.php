<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function company()
    {
        return $this->belongsTo(BusCompany::class, 'company_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function segments()
    {
        return $this->hasMany(TripSegment::class);
    }

    public function tripSeats()
    {
        return $this->hasMany(TripSeat::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
