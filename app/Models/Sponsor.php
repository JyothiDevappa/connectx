<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'designation',
        'linkedin',
        'website',
        'sponsership_level',
        'status',
        'notes',
    ];
}
