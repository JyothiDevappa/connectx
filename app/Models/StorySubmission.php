<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorySubmission extends Model
{
    use HasFactory;

    protected $table = 'story_submissions';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'social_url',
        'talk_title',
        'speaking_language',
        'talk_summary',
        'status',
        'notes',
    ];
}
