<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offence extends Model
{
    use HasFactory;

    protected $fillable = [
        'has_unspent_conviction',
        'details',
    ];
}
