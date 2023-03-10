<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_id')->unique();
            $table->string('title')->nullable();
            $table->string('user_hash')->nullable();
            $table->string('product_hash')->nullable();
            $table->string('version')->nullable();
            $table->string('prio_hash')->nullable();
            $table->string('status_hash')->nullable();
            $table->string('type_hash')->nullable();
            $table->text('description')->nullable();
            $table->string('task_hash')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
