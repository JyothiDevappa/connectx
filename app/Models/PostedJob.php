<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostedJob extends Model
{
    protected $table = 'posted_jobs';

    protected $fillable = [
        'title',
        'slug',
        'category',
        'department',
        'work_mode',
        'experience',
        'duration',
        'location',
        'skills',
        'tagline',
        'content',
        'status',
    ];

    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'posted_job_id');
    }
}
