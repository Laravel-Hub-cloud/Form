<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthDisability extends Model
{
    use HasFactory;
    protected $fillable = [
        'has_disability',
        'disability_details',
        'advised_no_night_shift',
        'fitness_to_work_certificate',
    ];
}
