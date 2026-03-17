@extends('layouts.app')

@section('title', $event->name . ' - UNUD Events')

@section('content')
<div class="hero" style="padding: 60px 0;">
    <div class="container">
        <div style="text-align: left; max-width: 800px; margin: 0 auto;">
            <a href="/events" style="color: rgba(255, 255, 255, 0.8); text-decoration: none; font-weight: 500; margin-bottom: 1rem; display: inline-block;">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Event
            </a>
        </div>
    </div>
</div>

<div class="section container">
    <div style="max-width: 800px; margin: 0 auto;">
        <div style="background: white; border-radius: 12px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1); overflow: hidden;">
            <div class="event-header" style="padding: 2rem;">
                <span class="event-type" style="margin-bottom: 1rem; display: inline-block;">
                    @if($event->type === 'webinar')
                        <i class="fas fa-video"></i> Webinar
                    @elseif($event->type === 'lomba')
                        <i class="fas fa-trophy"></i> Kompetisi
                    @else
                        <i class="fas fa-handshake"></i> Pengabdian
                    @endif
                </span>
                <h1 class="event-title" style="font-size: 2.5rem; margin-top: 1rem;">{{ $event->name }}</h1>
            </div>

            <div class="event-body" style="padding: 2rem;">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h3 style="font-size: 0.9rem; color: #64748b; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem;">
                            <i class="fas fa-calendar-alt"></i> Tanggal Mulai
                        </h3>
                        <p style="font-size: 1.2rem; font-weight: 500; color: #0f172a; margin: 0;">
                            {{ \Carbon\Carbon::parse($event->start_date)->format('d F Y') }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3 style="font-size: 0.9rem; color: #64748b; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem;">
                            <i class="fas fa-calendar-alt"></i> Tanggal Selesai
                        </h3>
                        <p style="font-size: 1.2rem; font-weight: 500; color: #0f172a; margin: 0;">
                            {{ \Carbon\Carbon::parse($event->end_date)->format('d F Y') }}
                        </p>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 2rem 0;">

                <div class="row mb-4">
                    <div class="col-md-4">
                        <h3 style="font-size: 0.9rem; color: #64748b; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem;">
                            <i class="fas fa-star"></i> Bobot SKP
                        </h3>
                        <p style="font-size: 1.5rem; font-weight: 600; color: #1e40af; margin: 0;">{{ $event->skp_weight }}</p>
                    </div>
                    <div class="col-md-4">
                        <h3 style="font-size: 0.9rem; color: #64748b; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem;">
                            <i class="fas fa-money-bill"></i> Biaya
                        </h3>
                        <p style="font-size: 1.5rem; font-weight: 600; color: #1e40af; margin: 0;">
                            @if($event->cost == 0)
                                Gratis
                            @else
                                Rp {{ number_format($event->cost, 0, ',', '.') }}
                            @endif
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3 style="font-size: 0.9rem; color: #64748b; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem;">
                            <i class="fas fa-tag"></i> Jenis
                        </h3>
                        <p style="font-size: 1.5rem; font-weight: 600; color: #1e40af; margin: 0;">{{ ucfirst($event->type) }}</p>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 2rem 0;">

                <h3 style="font-size: 1.2rem; font-weight: 600; color: #0f172a; margin-bottom: 1rem;">
                    <i class="fas fa-info-circle"></i> Tentang Event
                </h3>
                <p style="color: #475569; line-height: 1.8; font-size: 1rem; margin-bottom: 2rem;">
                    {{ $event->description }}
                </p>

                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 2rem 0;">

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    @auth
                        @if(!auth()->user()->events()->where('event_id', $event->id)->exists())
                        <form action="{{ route('events.register', $event) }}" method="POST" style="flex: 1; min-width: 150px;">
                            @csrf
                            <button type="submit" class="btn-primary-custom" style="width: 100%; cursor: pointer; border: none;">
                                <i class="fas fa-check-circle"></i> Ikuti Event
                            </button>
                        </form>
                        @else
                        <div style="flex: 1; padding: 0.6rem 1.2rem; background: #d1fae5; color: #065f46; border-radius: 8px; text-align: center; font-weight: 600;">
                            <i class="fas fa-check"></i> Anda Sudah Mengikuti Event
                        </div>
                        @endif
                    @else
                    <a href="{{ route('login') }}" class="btn-primary-custom" style="text-decoration: none; flex: 1; min-width: 150px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-sign-in-alt"></i> Login untuk Mendaftar
                    </a>
                    @endauth

                    @if($event->registration_link)
                    <a href="{{ $event->registration_link }}" target="_blank" class="btn-secondary-custom" style="text-decoration: none; padding: 0.6rem 1.5rem;">
                        <i class="fas fa-external-link-alt"></i> Daftar Eksternal
                    </a>
                    @endif
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="/events" class="btn-secondary-custom" style="text-decoration: none; padding: 0.8rem 2rem;">
                <i class="fas fa-arrow-left"></i> Kembali ke Daftar Event
            </a>
        </div>
    </div>
</div>
@endsection