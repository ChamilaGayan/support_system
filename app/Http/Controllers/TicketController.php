<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function addTicket(Request $request)
    {

    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pin = mt_rand(1000000, 9999999)
    . mt_rand(1000000, 9999999)
    . $characters[rand(0, strlen($characters) - 1)];
    $string = str_shuffle($pin);

        Ticket::create([
            'reference_number' => $string,
            'customer_name' => $request->name,
            'customer_email' => $request->email,
            'customer_phone' => $request->phone_number,
            'customer_message' => $request->message,
        ]);

        return redirect()->back()->with('status',' Thank you!, your message has been submitted to us');
    }

    public function ticket()
    {
        $ticket = Ticket::get();
        return view('ticket', ['tickets'=> $ticket]);
    }

    public function ticketView($ticket_id)
    {
        $ticket = Ticket::find($ticket_id);
        return view('ticketView', compact('ticket'));
    }

    public function close($ticket_id)
    {
        $ticket = Ticket::find($ticket_id);
        $ticket->status = 2;
        $ticket->update();
        return redirect()->back()->with('status','Ticket closed successfully');
    }

    public function confirm(Request $request, $ticket_id)
    {
        $ticket = Ticket::find($ticket_id);
        $ticket->reply = $request->input('reply');
        $ticket->status = 1;
        $ticket->update();
        return redirect()->back()->with('status','Reply successfully sent to customer email.');

    }
}
