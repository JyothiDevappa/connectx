<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = 'job_applications';

    protected $fillable = [
        'posted_job_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'linkedin_url',
        'resume_url',
        'cover_letter',
        'category',
        'status',
        'notes',
    ];

    public function job()
    {
        return $this->belongsTo(PostedJob::class, 'posted_job_id');
    }
}
