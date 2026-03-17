@extends('layouts.app')

@section('title', 'Beranda - UNUD Events')

@section('content')
<div class="hero">
    <div class="container">
        <h1>Temukan Event Terbaikmu</h1>
        <p>Jangan lewatkan kesempatan emas untuk mengembangkan skill dan memperluas jaringan Anda di kampus</p>
        <a href="/events" class="btn-hero">
            Jelajahi Event <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i>
        </a>
    </div>
</div>

<div class="section" style="padding: 5rem 0; background: white;">
    <div class="container">
        <h2 class="section-title">Jenis Event yang Tersedia</h2>
        <p class="section-subtitle">Berbagai pilihan event sesuai dengan minat Anda</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon" style="color: #3b82f6;">
                        <i class="fas fa-presentation"></i>
                    </div>
                    <h3>Webinar</h3>
                    <p>Perluas wawasan melalui sesi pembelajaran interaktif dengan pembicara berpengalaman dari berbagai bidang industri.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon" style="color: #3b82f6;">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Kompetisi</h3>
                    <p>Tunjukkan kemampuanmu dan bersaing dengan mahasiswa lain dalam berbagai jenis kompetisi akademik dan non-akademik.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon" style="color: #3b82f6;">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Pengabdian Masyarakat</h3>
                    <p>Berikan dampak positif dengan mengikuti program pengabdian yang membantu masyarakat sekitar kampus.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background: #f8fafb; padding: 5rem 0;">
    <div class="container">
        <h2 class="section-title">Keuntungan Mengikuti Event</h2>
        <p class="section-subtitle">Dapatkan manfaat maksimal dari setiap event yang Anda ikuti</p>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';">
                    <div style="font-size: 2.5rem;">📈</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Tingkatkan Skill</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Belajar skill baru dari para ahli dan praktisi industri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';">
                    <div style="font-size: 2.5rem;">🤝</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Networking</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Bangun jaringan profesional dengan sesama mahasiswa dan praktisi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';">
                    <div style="font-size: 2.5rem;">🎯</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Raih Sertifikat</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Dapatkan sertifikat penghargaan untuk menambah portofolio Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';">
                    <div style="font-size: 2.5rem;">⭐</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Raih SKP</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Kumpulkan poin SKP melalui kegiatan akademik dan sosial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); color: white; padding: 4rem 0; text-align: center; margin-top: 3rem;">
    <div class="container">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 1rem;">Siap untuk Petualangan Baru?</h2>
        <p style="font-size: 1.05rem; margin-bottom: 2rem; opacity: 0.95;">Temukan event impian kamu dan daftarkan diri sekarang juga!</p>
        <a href="/events" class="btn-hero">Lihat Semua Event</a>
    </div>
</div>
@endsection
