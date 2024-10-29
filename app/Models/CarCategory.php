<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    use HasFactory;
    protected $table = 'car_categories';

    // Define fillable fields to allow mass assignment
    protected $fillable = ['id','name'];

}
