@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profil Pengguna</h1>
    <h3>Identitas Pengguna</h3>
    <p><strong>Nama:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <h3>Event yang Diikuti</h3>
    @if($attendedEvents->count() > 0)
    <ul>
        @foreach($attendedEvents as $event)
        <li>{{ $event->name }} ({{ $event->start_date }} - {{ $event->end_date }})</li>
        @endforeach
    </ul>
    @else
    <p>Belum ada event yang diikuti.</p>
    @endif
</div>
@endsection