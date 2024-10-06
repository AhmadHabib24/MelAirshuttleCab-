<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingInfo extends Model
{
    protected $table = 'booking_info';
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'package_type',
        'passengers',
        'start_dest',
        'end_dest',
        'ride_date',
        'ride_time',
        'luggage',
    ];
}
