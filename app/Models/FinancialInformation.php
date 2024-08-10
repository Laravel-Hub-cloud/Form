<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'declared_bankrupt',
        'subject_to_judgements',
        'details',
    ];
}
