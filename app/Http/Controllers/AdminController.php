<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function ticketview(){
    
    $tickets = Ticket::all();

        return view('Admin.message', compact('tickets'));
  }
    public function AdminHome()
    {
      return view('Admin.Adminhome');
    }
    public function AdminCreate(){

      return view('Admin.AdminCreate');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Admin::create($request->all());

        return redirect()->route('Admin.Adminhome');
    }

}
