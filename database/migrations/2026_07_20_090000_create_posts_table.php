<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('read_time')->nullable();
            $table->string('image')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('author_name')->default('Admin');
            $table->string('author_role')->default('Author');
            $table->string('author_avatar')->nullable();
            $table->string('status')->default('published'); // published, draft
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
