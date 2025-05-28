@extends('layouts.baa')

@section('content')
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Detail Ticket</h2>

            <div class="container-fluid">
                <!-- Ticket Details -->
                <h3 class="text-lg font-bold mb-2">Informasi Ticket</h3>
                <div class="row mb-2">
                    <div class="col-4 fw-bold">Nama</div>
                    <div class="col-8">{{ $ticket->name }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 fw-bold">Deskripsi</div>
                    <div class="col-8">{{ $ticket->description }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 fw-bold">Role</div>
                    <div class="col-8">{{ $ticket->role }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 fw-bold">Status</div>
                    <div class="col-8">{{ $ticket->status }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4 fw-bold">Submitted At</div>
                    <div class="col-8">{{ $ticket->created_at->format('d M Y') }}</div>
                </div>
                @if($ticket->reject_reason)
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Alasan Penolakan</div>
                        <div class="col-8">{{ $ticket->reject_reason }}</div>
                    </div>
                @endif

                <!-- Lesson Details -->
                @if($lesson)
                    <h3 class="text-lg font-bold mb-2 mt-4">Detail Lesson</h3>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Program Studi</div>
                        <div class="col-8">{{ $lesson->studyProgram->name ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Tahun</div>
                        <div class="col-8">{{ $lesson->year ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Kelas</div>
                        <div class="col-8">{{ $lesson->class->name ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Mata Kuliah</div>
                        <div class="col-8">{{ $lesson->course->name ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Ruangan</div>
                        <div class="col-8">{{ $lesson->room->name ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Dosen</div>
                        <div class="col-8">{{ $lesson->teacher->name ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Teaching Assistant</div>
                        <div class="col-8">{{ $lesson->teacherAssistant->name ?? '-' }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold">Course Type</div>
                        <div class="col-8">{{ $lesson->course_type ?? '-' }}</div>
                    </div>
                @else
                    <div class="row mb-2 mt-4">
                        <div class="col-12">Tidak ada data lesson terkait untuk tiket ini.</div>
                    </div>
                @endif

                <!-- Actions -->
                <div class="row mt-4">
                    <div class="col text-end">
                        <!-- <a href="{{ route('baa.tickets.approve', $ticket->id) }}" class="btn btn-success me-2">Approve</a> -->
                        <form action="{{ route('baa.tickets.approve', $ticket->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-success me-2">Approve</button>
                        </form>
                        <a href="#" class="btn btn-danger me-2" data-toggle="modal" data-target="#rejectModal">Reject</a>
                        <a href="{{ route('baa.tickets') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Reject -->
    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form id="rejectForm" action="{{ route('baa.ticket.reject', $ticket->id) }}" method="POST">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="rejectModalLabel">Alasan Penolakan Ticket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <textarea name="reject_reason" id="reject_reason" class="form-control" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-danger">Tolak Ticket</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</body>
</html>
@endsection

@section('scripts')
@parent
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#rejectModal').on('show.bs.modal', function (event) {
        $('#reject_reason').val('');
    });
});
</script>
@endsection