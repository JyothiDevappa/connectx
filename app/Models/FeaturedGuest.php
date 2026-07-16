<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedGuest extends Model
{
    use HasFactory;

    protected $table = 'featured_guests';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'company_name',
        'designation',
        'social_media_url',
        'topic',
        'status',
        'notes',
    ];
}
