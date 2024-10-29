<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_name',
        'car_model',
        'initial_charge',
        'per_mil_km',
        'per_stopped_traffic',
        'passengers',
        'email',
        'phone',
        'name',
        'starting_dest',
        'ending_dest',
        'ride_date',
        'ride_time',
        'message',
    ];
}
