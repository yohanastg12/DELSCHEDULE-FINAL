<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLessonRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lesson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }


    public function rules()
    {
        return [
            'study_program_id' => ['required', 'integer'],
            'year' => ['required', 'integer'],
            'class_id' => ['required', 'integer'],
            'room_id' => ['required', 'integer'],
            'teacher_id' => ['required', 'integer'],
            'teaching_assistant_id' => ['nullable', 'integer'],
            'weekday_id' => ['required', 'integer'],
            'course_id' => ['required', 'integer'],
            'course_type' => ['required', 'String'],
            'session_id' => ['required', 'integer'],
        ];
    }
}