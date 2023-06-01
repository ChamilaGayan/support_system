<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ticket = Ticket::get();
        $open_ticket = Ticket::where('status','=','0')->count();
        $replied_ticket = Ticket::where('status','=','1')->count();
        $closed_ticket = Ticket::where('status','=','2')->count();

        return view('home', compact('open_ticket', 'replied_ticket', 'closed_ticket'));
    }
}
