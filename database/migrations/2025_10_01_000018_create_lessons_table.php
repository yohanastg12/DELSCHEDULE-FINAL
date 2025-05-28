<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weekday_id')->nullable()->constrained('weekday')->nullOnDelete();
            $table->timestamps();
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('teaching_assistant_id')->nullable();
            $table->unsignedBigInteger('class_id');
            $table->softDeletes(); // created_at dan updated_at sudah ditambahkan via timestamps()
            $table->foreignId('session_id')->nullable()->constrained('sessions')->nullOnDelete();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreignId('study_program_id')->nullable()->constrained('study_program')->nullOnDelete();
            $table->string('year', 4)->nullable();
            $table->string('semester')->nullable();
            $table->foreignId('room_id')->nullable()->constrained('room')->nullOnDelete();
            $table->string('course_type', 30)->nullable();

            // Foreign keys
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->foreign('teaching_assistant_id')->references('id')->on('users');
            $table->foreign('class_id')->references('id')->on('school_classes');
            $table->foreign('course_id')->references('id')->on('course');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}