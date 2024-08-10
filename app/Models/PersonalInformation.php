<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'surname',
        'surname_at_birth',
        'title',
        'gender',
        'date_of_birth',
        'email',
        'mobile_number',
        'place_of_birth',
        'home_telephone_number',
        'mothers_maiden_name',
        'nationality', // Add this line
    ];
}
