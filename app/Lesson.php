<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    public $table = 'lessons';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'weekday_id',
        'class_id',
        'study_program_id',
        'teacher_id',
        'teaching_assistant_id',
        'course_id',
        'session_id',
        'room_id',
        'course_type',
        'year',
        'semester'
    ];

    // Relasi ke session
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id');
    }

    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }

    public function weekday()
    {
        return $this->belongsTo(WeekDay::class, 'weekday_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function teacherAssistant()
    {
        return $this->belongsTo(User::class, 'teaching_assistant_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}