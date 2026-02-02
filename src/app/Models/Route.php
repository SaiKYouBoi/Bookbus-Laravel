<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function routeStops()
    {
        return $this->hasMany(RouteStop::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
