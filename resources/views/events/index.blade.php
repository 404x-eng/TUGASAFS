@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Event Kampus UNUD</h1>
    <div class="row">
        @foreach($events as $event)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                    <p><strong>Tanggal:</strong> {{ $event->start_date }} - {{ $event->end_date }}</p>
                    <p><strong>Jenis:</strong> {{ ucfirst($event->type) }}</p>
                    <p><strong>SKP:</strong> {{ $event->skp_weight }}</p>
                    <p><strong>Biaya:</strong> Rp {{ number_format($event->cost, 0, ',', '.') }}</p>
                    <a href="{{ route('events.show', $event) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection