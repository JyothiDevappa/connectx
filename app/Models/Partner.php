<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'designation',
        'linkedin',
        'website',
        'partnership_type',
        'status',
        'notes',
    ];
}
