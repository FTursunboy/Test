<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('class_lectures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('lecture_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('order');
            $table->timestamps();
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_lectures');
    }
};
