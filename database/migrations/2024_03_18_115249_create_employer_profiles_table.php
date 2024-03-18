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
        Schema::create('employer_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('company_name');
            $table->string('industry');
            $table->text('company_address');
            $table->string('website_url');
            $table->string('logo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->text('about');
            $table->string('contact_number')->nullable();
            $table->string('contact_email');
            $table->string('socialmedia_link');
            $table->string('testimonials/reviews')->nullable();
            $table->string('projects/casestudies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_profiles');
    }
};
