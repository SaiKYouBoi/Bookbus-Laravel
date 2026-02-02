<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteStop extends Model
{
    use HasFactory;

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    public function fromSegments()
    {
        return $this->hasMany(TripSegment::class, 'from_stop_id');
    }

    public function toSegments()
    {
        return $this->hasMany(TripSegment::class, 'to_stop_id');
    }
}