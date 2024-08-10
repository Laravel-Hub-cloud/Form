<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingTimeDirective extends Model
{
    use HasFactory;
    protected $fillable = [
        'understand_wtd',
        'opt_out_48hr_week',
    ];
}
