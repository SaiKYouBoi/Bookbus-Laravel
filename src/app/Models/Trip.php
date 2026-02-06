<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function company()
    {
        return $this->belongsTo(Bus::class, 'company_id');
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

    public function routeStops()
    {
        return $this->hasMany(RouteStop::class);
    }
}