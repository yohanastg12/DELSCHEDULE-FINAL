<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('weekday_id')->nullable()->constrained('weekday')->onDelete('set null');
            $table->timestamps();
            $table->foreignId('teacher_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('teaching_assistant_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('class_id')->constrained('school_classes')->onDelete('cascade');
            $table->softDeletes();
            $table->foreignId('session_id')->nullable()->constrained('sessions')->onDelete('set null');
            $table->foreignId('course_id')->nullable()->constrained('course')->onDelete('set null');
            $table->foreignId('study_program_id')->nullable()->constrained('study_program')->onDelete('set null');
            $table->string('year', 4)->nullable();
            $table->string('semester')->nullable();
            $table->foreignId('room_id')->nullable()->constrained('room')->onDelete('set null');
            $table->string('course_type', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}