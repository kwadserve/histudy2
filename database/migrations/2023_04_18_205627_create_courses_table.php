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
            $table->string('title');
            $table->string('short_description');
            $table->longText('long_description');
            $table->string('image')->nullable();
            $table->integer('category_id');
            $table->float('price',8,2);
            $table->integer('teacher_id');
            $table->timestamp('start')->nullable();
            $table->timestamp('finish')->nullable();
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
