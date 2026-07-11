<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posted_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // career, internship
            $table->string('department'); // Tech, Content, Marketing, etc.
            $table->string('work_mode')->default('Remote'); // Remote, Hybrid, On-site
            $table->string('experience')->nullable();
            $table->string('duration')->nullable(); // For internships
            $table->string('location')->nullable();
            $table->text('skills')->nullable(); // comma-separated or json
            $table->string('tagline')->nullable();
            $table->text('content')->nullable(); // CKEditor content
            $table->string('status')->default('active'); // active, draft
            $table->timestamps();
        });

        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posted_job_id')->nullable()->constrained('posted_jobs')->onDelete('cascade');
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('whatsapp_number')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->text('residential_address')->nullable();
            $table->string('pursuing_education')->default('no'); // yes, no
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('semester')->nullable();
            $table->string('institution')->nullable();
            $table->string('degree')->nullable();
            $table->string('year_of_passing')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('resume_url')->nullable();
            $table->text('cover_letter')->nullable();
            $table->string('category'); // career, internship
            $table->string('status')->default('new'); // new, review, shortlisted, hired, rejected
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_applications');
        Schema::dropIfExists('posted_jobs');
    }
};
