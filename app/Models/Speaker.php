<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'location',
        'primary_role',
        'speaking_language',
        'social_media_url',
        'story',
        'status',
        'notes',
    ];
}
