<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'employer_agency',
        'position_held',
        'date_from',
        'city_or_town',
        'contact',
    ];
}
