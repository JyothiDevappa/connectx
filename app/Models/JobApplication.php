<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = 'job_applications';

    protected $fillable = [
        'posted_job_id',
        'full_name',
        'email',
        'phone',
        'whatsapp_number',
        'dob',
        'nationality',
        'marital_status',
        'emergency_name',
        'emergency_phone',
        'residential_address',
        'pursuing_education',
        'college',
        'course',
        'semester',
        'institution',
        'degree',
        'year_of_passing',
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
