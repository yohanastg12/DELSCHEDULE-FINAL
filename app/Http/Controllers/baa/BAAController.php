<?php
namespace App\Http\Controllers\baa;

use App\Ticket;
use App\Http\Controllers\Controller;
use App\Lesson;
use Illuminate\Http\Request;

class BAAController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('status', 'pending')->get();
        $ticketAdmin = Ticket::where('status', '!=', 'pending')->get();
        return view('baa.index', compact('tickets', 'ticketAdmin'));
    }

    public function tickets()
    {
        $tickets = Ticket::where('status', 'pending')->get();
        $ticketAdmin = Ticket::where('status', '!=', 'pending')->get();
        return view('baa.index', compact('tickets', 'ticketAdmin'));
    }

    public function approve($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = 'approved';
        $ticket->approved_by = auth()->id();
        $ticket->save();

        return redirect()->route('baa.dashboard')->with('success', 'Ticket approved successfully.');
    }

    public function showRejectForm($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('baa.reject_form', compact('ticket'));
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'reject_reason' => 'required|string|max:1000',
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->status = 'rejected';
        $ticket->approved_by = auth()->id();
        $ticket->reject_reason = $request->reject_reason;
        $ticket->save();

        return redirect()->route('baa.dashboard')->with('success', 'Ticket berhasil ditolak.');
    }

     public function show($id)
    {
        $ticket = Ticket::findOrFail($id);
        $lesson = $ticket->lesson_id ? Lesson::findOrFail($ticket->lesson_id) : null;
        //  dd($ticket, $lesson);
        return view('baa.detail_ticket', compact('ticket', 'lesson'));
    }


}