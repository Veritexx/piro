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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('department');
            $table->string('company');
            $table->string('location');
            $table->string('job_title');
            $table->string('email')->unique();
            $table->text('description');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_hash')->unique();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
