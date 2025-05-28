@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4"><i class="fas fa-ticket-alt"></i> Ticketing Admin</h2>
    <div class="card">
        <div class="card-header">Daftar Ticket</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Submitted At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->name }}</td>
                            <td>{{ $ticket->description }}</td>
                            <td>{{ $ticket->role }}</td>
                            <td>{{ $ticket->status }}</td>
                            <td>{{ $ticket->created_at->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('admin.ticketing.show', $ticket->id) }}" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada ticket.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
