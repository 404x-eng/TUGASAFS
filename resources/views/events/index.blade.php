@extends('layouts.app')

@section('title', 'Daftar Event - UNUD Events')

@section('content')
<div class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 style="font-size: 2.5rem;">Semua Event</h1>
        <p>Cari dan daftar event yang paling sesuai dengan minat Anda</p>
    </div>
</div>

<div class="section container">
    <div style="margin-bottom: 2rem; display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
        <a href="/events" class="btn btn-primary-custom" style="text-decoration: none;">
            <i class="fas fa-list"></i> Semua
        </a>
        <a href="/events?type=webinar" class="btn btn-secondary-custom" style="text-decoration: none;">
            <i class="fas fa-video"></i> Webinar
        </a>
        <a href="/events?type=lomba" class="btn btn-secondary-custom" style="text-decoration: none;">
            <i class="fas fa-trophy"></i> Kompetisi
        </a>
        <a href="/events?type=pengabdian" class="btn btn-secondary-custom" style="text-decoration: none;">
            <i class="fas fa-handshake"></i> Pengabdian
        </a>
    </div>

    <div class="row gy-4">
        @forelse($events as $event)
        <div class="col-lg-6 col-xl-4">
            <div class="event-card">
                <div class="event-header">
                    <span class="event-type">
                        @if($event->type === 'webinar')
                            <i class="fas fa-video"></i> Webinar
                        @elseif($event->type === 'lomba')
                            <i class="fas fa-trophy"></i> Kompetisi
                        @else
                            <i class="fas fa-handshake"></i> Pengabdian
                        @endif
                    </span>
                    <h3 class="event-title">{{ $event->name }}</h3>
                </div>
                <div class="event-body">
                    <div class="event-description">
                        {{ Str::limit($event->description, 100) }}
                    </div>
                    <div class="event-info">
                        <div class="event-info-item">
                            <i class="fas fa-calendar"></i>
                            <span>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</span>
                        </div>
                        <div class="event-info-item">
                            <i class="fas fa-star"></i>
                            <span>{{ $event->skp_weight }} SKP</span>
                        </div>
                        <div class="event-info-item">
                            <i class="fas fa-money-bill"></i>
                            <span>
                                @if($event->cost == 0)
                                    Gratis
                                @else
                                    Rp {{ number_format($event->cost, 0, ',', '.') }}
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="event-footer">
                        <a href="{{ route('events.show', $event) }}" class="btn-primary-custom">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div style="text-align: center; padding: 3rem;">
                <i class="fas fa-inbox" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 1rem; display: block;"></i>
                <p style="color: #64748b; font-size: 1.1rem;">Tidak ada event yang ditemukan</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection