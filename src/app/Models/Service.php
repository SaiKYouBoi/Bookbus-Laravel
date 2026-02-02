<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function busCompany()
    {
        return $this->belongsTo(BusCompany::class, 'bus_id');
    }
}