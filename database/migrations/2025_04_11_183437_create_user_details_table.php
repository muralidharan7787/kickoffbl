<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('username')->unique(); // Unique username
            $table->string('email')->unique(); // Unique email
            $table->string('password'); // Hashed password
            $table->string('name')->nullable(); // Display name
            $table->string('profile_picture')->nullable(); // Profile image URL or filename
            $table->text('bio')->nullable(); // Short bio
            $table->string('website')->nullable(); // Optional link
            $table->string('gender')->nullable(); // Male/Female/Other
            $table->string('location')->nullable(); // City or country
            $table->string('phone_number')->nullable(); // Optional phone
            $table->boolean('is_verified')->default(false); // Verified badge
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken(); // For "remember me" login
            $table->boolean('is_private')->default(false); // Private account
            $table->boolean('notifications_enabled')->default(true);
            $table->timestamps(); // created_at and updated_at            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
