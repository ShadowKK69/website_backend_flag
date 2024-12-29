<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'license_plate',
        'brand',
        'model',
        'version',
        'submodel',
        'color',
        'vehicle_logo',
        'doors',
        'engine_power',
        'traction',
        'gearbox',
        'fuel',
        'color_type',
        'vehicle_class'
    ];
}
