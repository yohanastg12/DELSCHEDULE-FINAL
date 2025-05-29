@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4"><i class="fas fa-ticket-alt"></i> Detail Ticket</h2>
    <div class="card">
        <div class="card-body">
            <div class="mb-2"><strong>Nama:</strong> {{ $ticket->name }}</div>
            <div class="mb-2"><strong>Deskripsi:</strong> {{ $ticket->description }}</div>
            <div class="mb-2"><strong>Role:</strong> {{ $ticket->role }}</div>
            <div class="mb-2"><strong>Status:</strong> {{ $ticket->status }}</div>
            <div class="mb-2"><strong>Submitted At:</strong> {{ $ticket->created_at->format('d M Y') }}</div>
            @if($ticket->reject_reason)
                <div class="mb-2"><strong>Alasan Penolakan:</strong> {{ $ticket->reject_reason }}</div>
            @endif
            @if($lesson)
                <hr>
                <h4>Detail Lesson</h4>
                <div class="mb-2"><strong>Program Studi:</strong> {{ $lesson->studyProgram->name ?? '-' }}</div>
                <div class="mb-2"><strong>Tahun:</strong> {{ $lesson->year ?? '-' }}</div>
                <div class="mb-2"><strong>Kelas:</strong> {{ $lesson->class->name ?? '-' }}</div>
                <div class="mb-2"><strong>Mata Kuliah:</strong> {{ $lesson->course->name ?? '-' }}</div>
                <div class="mb-2"><strong>Ruangan:</strong> {{ $lesson->room->name ?? '-' }}</div>
                <div class="mb-2"><strong>Dosen:</strong> {{ $lesson->teacher->name ?? '-' }}</div>
                <div class="mb-2"><strong>Teaching Assistant:</strong> {{ $lesson->teacherAssistant->name ?? '-' }}</div>
                <div class="mb-2"><strong>Course Type:</strong> {{ $lesson->course_type ?? '-' }}</div>
                <div class="mb-2"><strong>Semester:</strong> {{ $lesson->semester ?? '-' }}</div>

            @else
                <div class="mb-2"><em>Tidak ada data lesson terkait untuk tiket ini.</em></div>
            @endif
            <a href="{{ route('admin.ticketing.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
