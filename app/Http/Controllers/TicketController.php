<?php

// app/Http/Controllers/TicketController.php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function Home()
    {
      return view('tickets.Home');
    }
    public function index()
    {
        $tickets = AdminLogin::all();

        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $title = $request->input('title');

        // Store the title in the session
        session(['title' => $title]);
        Ticket::create($request->all());
        return redirect()->route('tickets.home')->with('success', 'Your ticket has been sent and an administrator will respond shortly');
    }
}

