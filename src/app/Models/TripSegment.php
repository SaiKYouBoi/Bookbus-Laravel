<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripSegment extends Model
{
    use HasFactory;

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function fromStop()
    {
        return $this->belongsTo(RouteStop::class, 'from_stop_id');
    }
    
    public function toStop()
    {
        return $this->belongsTo(RouteStop::class, 'to_stop_id');
    }
}
