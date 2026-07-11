<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connector extends Model
{
    protected $table = 'connectors';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'linkedin',
        'designation',
        'expertise',
        'bio',
        'status',
        'notes',
    ];
}
