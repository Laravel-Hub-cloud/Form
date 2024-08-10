<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterReference extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference_number',
        'house_name_or_number',
        'street_name',
        'city_or_town',
        'post_code',
        'year_known',
    ];
}

