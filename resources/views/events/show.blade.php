@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $event->name }}</h1>
    <p><strong>Tanggal Mulai:</strong> {{ $event->start_date }}</p>
    <p><strong>Tanggal Selesai:</strong> {{ $event->end_date }}</p>
    <p><strong>Deskripsi:</strong> {{ $event->description }}</p>
    <p><strong>Bobot SKP:</strong> {{ $event->skp_weight }}</p>
    <p><strong>Biaya:</strong> Rp {{ number_format($event->cost, 0, ',', '.') }}</p>
    <p><strong>Jenis:</strong> {{ ucfirst($event->type) }}</p>
    @auth
        @if(!auth()->user()->events()->where('event_id', $event->id)->exists())
        <form action="{{ route('events.register', $event) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Ikuti Event</button>
        </form>
        @else
        <p class="text-success">Anda sudah mengikuti event ini.</p>
        @endif
    @endauth
    @if($event->registration_link)
    <a href="{{ $event->registration_link }}" class="btn btn-primary" target="_blank">Daftar Event</a>
    @endif
    <a href="{{ route('events.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
</div>
@endsection