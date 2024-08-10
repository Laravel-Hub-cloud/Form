<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;

    protected $fillable = [
        'agreed',
        'declaration_text',
        'signature',
        'print_name',
        'date_completed',
    ];
}
