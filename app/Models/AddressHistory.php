<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'personal_information_id',
        'current_address',
        'house_name_or_number',
        'street_name',
        'city_or_town',
        'country',
        'post_code',
        'date_from',
    ];
}
