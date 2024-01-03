<!-- resources/views/tickets/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tickets</h1>

    <ul>
        @foreach ($tickets as $ticket)
            <li>{{ $ticket->title }} - {{ $ticket->status }}</li>
        @endforeach
    </ul>
@endsection






