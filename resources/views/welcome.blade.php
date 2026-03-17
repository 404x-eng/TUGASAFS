@extends('layouts.app')

@section('title', 'Beranda - UNUD Events')

@section('content')
<div class="hero">
    <div class="container">
        <h1>Temukan Event Terbaik</h1>
        <p>Jangan lewatkan kesempatan emas untuk mengembangkan skill dan memperluas jaringan Anda</p>
        <a href="/events" class="btn btn-hero">
            Mulai Jelajahi <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
        </a>
    </div>
</div>

<div class="section container">
    <h2 class="section-title">Jenis Event</h2>
    <p class="section-subtitle">Berbagai pilihan event yang sesuai dengan minat Anda</p>
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>Webinar</h3>
                <p>Sesi pembelajaran interaktif dengan pembicara ahli. Tingkatkan pengetahuan dan skill Anda dari rumah.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>Kompetisi</h3>
                <p>Buktikan kemampuan Anda dan bersaing dengan mahasiswa terbaik. Raih penghargaan dan pengakuan.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="feature-icon">🤝</div>
                <h3>Pengabdian</h3>
                <p>Berkontribusi langsung untuk masyarakat. Kembangkan diri sambil membantu yang membutuhkan.</p>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #f0f4ff; padding: 3rem 0;">
    <div class="container section">
        <h2 class="section-title">Mengapa Mengikuti Event?</h2>
        <p class="section-subtitle">Manfaat nyata yang akan Anda dapatkan</p>
        <div class="row gy-3">
            <div class="col-md-6">
                <div style="display: flex; gap: 1.5rem; padding: 1rem;">
                    <div style="font-size: 2rem; flex-shrink: 0;">⭐</div>
                    <div>
                        <h4 style="margin-bottom: 0.3rem; color: #0f172a;">Tingkatkan Skill</h4>
                        <p style="color: #64748b; margin: 0; font-size: 0.95rem;">Belajar langsung dari praktisi berpengalaman di bidangnya</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="display: flex; gap: 1.5rem; padding: 1rem;">
                    <div style="font-size: 2rem; flex-shrink: 0;">📜</div>
                    <div>
                        <h4 style="margin-bottom: 0.3rem; color: #0f172a;">Dapatkan Sertifikat</h4>
                        <p style="color: #64748b; margin: 0; font-size: 0.95rem;">Sertifikat kehadiran untuk setiap event yang Anda ikuti</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="display: flex; gap: 1.5rem; padding: 1rem;">
                    <div style="font-size: 2rem; flex-shrink: 0;">🎯</div>
                    <div>
                        <h4 style="margin-bottom: 0.3rem; color: #0f172a;">Peroleh SKP</h4>
                        <p style="color: #64748b; margin: 0; font-size: 0.95rem;">Akumulasi kredit pelatihan untuk pengembangan karir</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="display: flex; gap: 1.5rem; padding: 1rem;">
                    <div style="font-size: 2rem; flex-shrink: 0;">🌐</div>
                    <div>
                        <h4 style="margin-bottom: 0.3rem; color: #0f172a;">Jaringan Profesional</h4>
                        <p style="color: #64748b; margin: 0; font-size: 0.95rem;">Bertemu dan terhubung dengan profesional dan mahasiswa lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section container">
    <h2 class="section-title">Event Terbaru</h2>
    <p class="section-subtitle">Jangan lewatkan kesempatan ini</p>
    <div style="text-align: center;">
        <a href="/events" class="btn btn-primary-custom" style="display: inline-block; padding: 0.8rem 2rem; text-decoration: none;">
            Lihat Semua Event <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
        </a>
    </div>
</div>
@endsection
