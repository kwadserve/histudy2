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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('image')->nullable();
            $table->integer('category_id')->nullable();
            $table->float('price',8,2)->nullable();
            $table->integer('teacher_id');
            $table->timestamp('start')->nullable()->nullable();
            $table->timestamp('finish')->nullable()->nullable();
            $table->integer('min_person')->default(1);
            $table->integer('max_person')->default(1);
            $table->integer('count_person')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
