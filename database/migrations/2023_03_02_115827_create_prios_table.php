<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('prios', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sequence')->nullable();
            $table->string('prio')->nullable();
            $table->text('description')->nullable();
            $table->string('prio_hash')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prios');
    }
};
