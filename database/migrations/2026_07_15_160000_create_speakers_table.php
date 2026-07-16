<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('location');
            $table->string('primary_role');
            $table->string('speaking_language');
            $table->string('social_media_url');
            $table->text('story');
            $table->string('status')->default('pending'); // pending, confirmed, declined
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
