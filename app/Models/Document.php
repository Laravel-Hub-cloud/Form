<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'ni_number',
        'proof_of_ni_number',
        'right_to_work_in_uk',
        'proof_of_right_to_work',
        'require_brp_visa',
        'brp_visa_copy',
        'hold_sia_license',
        'sia_license_picture',
        'sia_license_number',
        'sia_license_expiry',
        'hold_dbs_certificate',
        'dbs_certificate_copy',
    ];
}
