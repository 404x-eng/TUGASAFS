@extends('layouts.app')

@section('title', 'Profil Saya - UNUD Events')

@section('content')
<div class="hero" style="padding: 60px 0;">
    <div class="container">
        <h1 style="font-size: 2.5rem;">Profil Saya</h1>
        <p>Kelola informasi dan event yang Anda ikuti</p>
    </div>
</div>

<div class="section container">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-lg-4 mb-4">
                <div style="background: white; border-radius: 12px; padding: 2rem; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08); text-align: center;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-family: 'Poppins', sans-serif; font-weight: 600;">
                        {{ substr($user->name, 0, 1) }}
                    </div>
                    <h2 style="font-size: 1.5rem; color: #0f172a; margin-bottom: 0.3rem;">{{ $user->name }}</h2>
                    <p style="color: #64748b; margin: 0;">{{ $user->email }}</p>
                </div>
            </div>

            <!-- Events List -->
            <div class="col-lg-8">
                <div style="background: white; border-radius: 12px; padding: 2rem; box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);">
                    <h3 style="font-size: 1.3rem; color: #0f172a; margin-bottom: 1.5rem; font-weight: 600;">
                        <i class="fas fa-calendar-check"></i> Event yang Diikuti
                    </h3>

                    @if($attendedEvents->count() > 0)
                        <div style="display: grid; gap: 1rem;">
                            @foreach($attendedEvents as $event)
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; border: 1px solid #e2e8f0; border-radius: 8px; background: #f8f9fa;">
                                <div style="flex: 1;">
                                    <h4 style="margin: 0 0 0.3rem 0; color: #0f172a; font-weight: 600;">{{ $event->name }}</h4>
                                    <p style="margin: 0.3rem 0; color: #64748b; font-size: 0.9rem;">
                                        <i class="fas fa-calendar"></i>
                                        {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}
                                    </p>
                                    <div style="margin-top: 0.5rem; display: flex; gap: 1rem;">
                                        <span style="display: inline-block; background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); color: white; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem; font-weight: 600;">
                                            {{ $event->skp_weight }} SKP
                                        </span>
                                        <span style="display: inline-block; background: 
                                            @if($event->type === 'webinar')
                                                rgba(59, 130, 246, 0.1); color: #1e40af;
                                            @elseif($event->type === 'lomba')
                                                rgba(249, 115, 22, 0.1); color: #ea580c;
                                            @else
                                                rgba(34, 197, 94, 0.1); color: #16a34a;
                                            @endif
                                        ; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.8rem; font-weight: 600;">
                                            {{ ucfirst($event->type) }}
                                        </span>
                                    </div>
                                </div>
                                <a href="{{ route('events.show', $event) }}" class="btn-primary-custom" style="text-decoration: none; white-space: nowrap; margin-left: 1rem;">
                                    Lihat Detail
                                </a>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div style="text-align: center; padding: 2rem;">
                            <div style="font-size: 3rem; color: #cbd5e1; margin-bottom: 1rem;">
                                <i class="fas fa-calendar-times"></i>
                            </div>
                            <p style="color: #64748b; font-size: 1rem; margin-bottom: 1.5rem;">
                                Anda belum mengikuti event apapun
                            </p>
                            <a href="/events" class="btn-primary-custom" style="text-decoration: none; display: inline-block;">
                                <i class="fas fa-search"></i> Cari Event Sekarang
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Total SKP -->
                @if($attendedEvents->count() > 0)
                <div style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); border-radius: 12px; padding: 2rem; margin-top: 2rem; color: white; text-align: center;">
                    <p style="margin: 0; font-size: 0.9rem; opacity: 0.9; margin-bottom: 0.5rem;">Total SKP Akumulasi</p>
                    <h2 style="margin: 0; font-size: 2.5rem; font-family: 'Poppins', sans-serif;">{{ $attendedEvents->sum('skp_weight') }} SKP</h2>
                </div>
                @endif
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="/" class="btn-secondary-custom" style="text-decoration: none; padding: 0.8rem 2rem;">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@endsection