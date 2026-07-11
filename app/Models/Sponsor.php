<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsors';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'designation',
        'linkedin',
        'website',
        'sponsorship_level',
        'status',
        'notes',
    ];
}
