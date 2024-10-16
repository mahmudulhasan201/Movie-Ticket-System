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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->foreignId('category_id')->constrained('categories')->restrictOnDelete();
            $table->string('director')->nullable();
            $table->string('cast')->nullable();
            $table->string('run_time')->nullable();
            $table->string('release_date')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
