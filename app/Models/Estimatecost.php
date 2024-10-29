<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimatecost extends Model
{
    use HasFactory;
    protected $fillable = ['distanceInKilometers', 'totalFare','pick','deliver'];
}
