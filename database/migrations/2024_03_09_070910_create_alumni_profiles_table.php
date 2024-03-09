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
        Schema::create('alumni_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->integer('graduation_year');
            $table->string('major');
            $table->string('bio')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('website_portfolio_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('socialmedia_link')->nullable();
            $table->string('phonenumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_profiles');
    }
};
