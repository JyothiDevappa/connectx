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
        'sponsorship_level',
        'status',
        'notes',
    ];

    public function getSponsorshipLevelAttribute()
    {
        return $this->attributes['sponsorship_level'] ?? $this->attributes['sponsership_level'] ?? null;
    }

    public function setSponsorshipLevelAttribute($value)
    {
        $this->attributes['sponsorship_level'] = $value;
        $this->attributes['sponsership_level'] = $value;
    }
}
