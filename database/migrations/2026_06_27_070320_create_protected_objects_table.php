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
        Schema::create('protected_objects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('camera_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->integer('x')->nullable();
            $table->integer('y')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protected_objects');
    }
};
