<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    public function trips()
    {
        return $this->hasMany(Trip::class, 'bus_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'bus_id');
    }
}
