@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.lesson.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.lessons.update', [$lesson->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label class="required" for="study_program_id">{{ trans('cruds.lesson.fields.study_program') }}</label>
                    <select class="form-control select2 {{ $errors->has('studyProgram') ? 'is-invalid' : '' }}"
                        name="study_program_id" id="study_program_id" required>
                        @foreach ($studyPrograms as $id => $studyProgram)
                            <option value="{{ $id }}"
                                {{ old('study_program_id', $lesson->study_program_id) == $id ? 'selected' : '' }}>
                                {{ $studyProgram }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('studyProgram'))
                        <div class="invalid-feedback">
                            {{ $errors->first('studyProgram') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.study_program_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="year">{{ trans('cruds.lesson.fields.year') }}</label>
                    <input name="year" id="year"
                        class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" type="number"
                        value="{{ old('year', $lesson->year) }}" required />
                    @if ($errors->has('year'))
                        <div class="invalid-feedback">
                            {{ $errors->first('year') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.year_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="semester">{{ trans('cruds.lesson.fields.semester') }}</label>
                    <select name="semester" id="semester"
                        class="form-control {{ $errors->has('semester') ? 'is-invalid' : '' }}" required>
                        <option value="Ganjil" {{ old('semester', $lesson->semester) == 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                        <option value="Genap" {{ old('semester', $lesson->semester) == 'Genap' ? 'selected' : '' }}>Genap</option>
                    </select>
                    @if ($errors->has('semester'))
                        <div class="invalid-feedback">
                            {{ $errors->first('semester') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.semester_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="class_id">{{ trans('cruds.lesson.fields.class') }}</label>
                    <select class="form-control select2 {{ $errors->has('class') ? 'is-invalid' : '' }}" name="class_id"
                        id="class_id" required>
                        @foreach ($classes as $id => $class)
                            <option value="{{ $id }}"
                                {{ old('class_id', $lesson->class_id) == $id ? 'selected' : '' }}>{{ $class }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('class'))
                        <div class="invalid-feedback">
                            {{ $errors->first('class') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.class_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="room_id">{{ trans('cruds.lesson.fields.room') }}</label>
                    <select class="form-control select2 {{ $errors->has('room') ? 'is-invalid' : '' }}" name="room_id"
                        id="room_id" required>
                        @foreach ($rooms as $id => $room)
                            <option value="{{ $id }}"
                                {{ old('room_id', $lesson->room_id) == $id ? 'selected' : '' }}>{{ $room }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('room'))
                        <div class="invalid-feedback">
                            {{ $errors->first('room') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.room_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="teacher_id">{{ trans('cruds.lesson.fields.teacher') }}</label>
                    <select class="form-control select2 {{ $errors->has('teacher') ? 'is-invalid' : '' }}"
                        name="teacher_id" id="teacher_id" required>
                        @foreach ($teachers as $id => $teacher)
                            <option value="{{ $id }}"
                                {{ old('teacher_id', $lesson->teacher_id) == $id ? 'selected' : '' }}>
                                {{ $teacher }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('teacher'))
                        <div class="invalid-feedback">
                            {{ $errors->first('teacher') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.teacher_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="teaching_assistant_id">Teaching Assistant</label>
                    <select class="form-control select2 {{ $errors->has('teaching_assistant') ? 'is-invalid' : '' }}"
                        name="teaching_assistant_id" id="teaching_assistant_id">
                        <option value="">-- None --</option>
                        @foreach ($asistant as $id => $name)
                            <option value="{{ $id }}"
                                {{ old('teaching_assistant_id', $lesson->teaching_assistant_id) == $id ? 'selected' : '' }}>
                                {{ $name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('teaching_assistant'))
                        <div class="invalid-feedback">
                            {{ $errors->first('teaching_assistant') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.teacher_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="weekday_id">{{ trans('cruds.lesson.fields.weekday') }}</label>
                    <select class="form-control select2 {{ $errors->has('weekday') ? 'is-invalid' : '' }}"
                        name="weekday_id" id="weekday_id" required>
                        @foreach ($weekdays as $id => $weekday)
                            <option value="{{ $id }}"
                                {{ old('weekday_id', $lesson->weekday_id) == $id ? 'selected' : '' }}>
                                {{ $weekday }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('weekday'))
                        <div class="invalid-feedback">
                            {{ $errors->first('weekday') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.weekday_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="course_id">{{ trans('cruds.lesson.fields.course') }}</label>
                    <select class="form-control select2 {{ $errors->has('course') ? 'is-invalid' : '' }}" name="course_id"
                        id="course_id" required>
                        @foreach ($courses as $id => $course)
                            <option value="{{ $id }}"
                                {{ old('course_id', $lesson->course_id) == $id ? 'selected' : '' }}>{{ $course }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('course'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.course_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="course_type">Course Type</label>
                    <select class="form-control select2 {{ $errors->has('course_type') ? 'is-invalid' : '' }}"
                        name="course_type" id="course_type">
                        <option value="">-- None --</option>
                        <option value="Teori" {{ old('course_type', $lesson->course_type) == 'Teori' ? 'selected' : '' }}>
                            Teori</option>
                        <option value="Praktikum"
                            {{ old('course_type', $lesson->course_type) == 'Praktikum' ? 'selected' : '' }}>
                            Praktikum</option>
                    </select>
                    @if ($errors->has('course_type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('course_type') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.course_type_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="session_id">{{ trans('cruds.lesson.fields.session') }}</label>
                    <select class="form-control select2 {{ $errors->has('session_id') ? 'is-invalid' : '' }}"
                        name="session_id" id="session_id" required>
                        @foreach ($sessions as $id => $session)
                            <option value="{{ $id }}"
                                {{ old('session_id', $lesson->session_id) == $id ? 'selected' : '' }}>
                                {{ $session }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('session_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('session_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.lesson.fields.session_helper') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
