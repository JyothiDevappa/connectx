<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            if (!Schema::hasColumn('job_applications', 'full_name')) {
                $table->string('full_name')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'whatsapp_number')) {
                $table->string('whatsapp_number')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'dob')) {
                $table->string('dob')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'nationality')) {
                $table->string('nationality')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'marital_status')) {
                $table->string('marital_status')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'emergency_name')) {
                $table->string('emergency_name')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'emergency_phone')) {
                $table->string('emergency_phone')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'residential_address')) {
                $table->text('residential_address')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'pursuing_education')) {
                $table->string('pursuing_education')->default('no');
            }
            if (!Schema::hasColumn('job_applications', 'college')) {
                $table->string('college')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'course')) {
                $table->string('course')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'semester')) {
                $table->string('semester')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'institution')) {
                $table->string('institution')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'degree')) {
                $table->string('degree')->nullable();
            }
            if (!Schema::hasColumn('job_applications', 'year_of_passing')) {
                $table->string('year_of_passing')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            // No drop needed
        });
    }
};
