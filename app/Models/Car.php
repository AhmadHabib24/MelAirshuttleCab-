<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_name',
        'car_model',
        'initial_charge',
        'per_mil_km',
        'per_stopped_traffic',
        'passengers',
        'car_category',
        'car_image',
    ];

    public function category()
{
    return $this->belongsTo(CarCategory::class, 'car_category', 'id'); // Assuming 'car_category' in cars table matches 'id' in car_categories table
}
    
}
