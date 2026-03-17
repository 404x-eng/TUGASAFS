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
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease; animation: fadeInUp 0.6s ease-out 0.1s both;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)'; this.style.transform='translateY(-8px)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <div style="font-size: 2.5rem; animation: bounce 2s ease-in-out infinite;">📈</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Tingkatkan Skill</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Belajar skill baru dari para ahli dan praktisi industri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease; animation: fadeInUp 0.6s ease-out 0.2s both;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)'; this.style.transform='translateY(-8px)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <div style="font-size: 2.5rem; animation: bounce 2s ease-in-out infinite 0.2s;">🤝</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Networking</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Bangun jaringan profesional dengan sesama mahasiswa dan praktisi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease; animation: fadeInUp 0.6s ease-out 0.3s both;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)'; this.style.transform='translateY(-8px)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <div style="font-size: 2.5rem; animation: bounce 2s ease-in-out infinite 0.4s;">🎯</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Raih Sertifikat</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Dapatkan sertifikat penghargaan untuk menambah portofolio Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-3" style="padding: 1.5rem; background: white; border-radius: 12px; border: 2px solid #e5e7eb; transition: all 0.3s ease; animation: fadeInUp 0.6s ease-out 0.4s both;" onmouseover="this.style.borderColor='#3b82f6'; this.style.boxShadow='0 8px 20px rgba(59, 130, 246, 0.1)'; this.style.transform='translateY(-8px)';" onmouseout="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <div style="font-size: 2.5rem; animation: bounce 2s ease-in-out infinite 0.6s;">⭐</div>
                    <div>
                        <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: #1a202c;">Raih SKP</h4>
                        <p style="color: #4b5563; margin: 0; font-size: 0.95rem;">Kumpulkan poin SKP melalui kegiatan akademik dan sosial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); color: white; padding: 4rem 0; text-align: center; margin-top: 3rem; position: relative; overflow: hidden;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23ffffff\" fill-opacity=\"0.05\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>'); opacity: 0.3; animation: float 8s ease-in-out infinite;"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 1rem; animation: fadeInDown 0.8s ease-out;">Siap untuk Petualangan Baru?</h2>
        <p style="font-size: 1.05rem; margin-bottom: 2rem; opacity: 0.95; animation: fadeInUp 0.8s ease-out 0.2s both;">Temukan event impian kamu dan daftarkan diri sekarang juga!</p>
        <a href="/events" class="btn-hero" style="animation: zoomIn 0.8s ease-out 0.4s both;">Lihat Semua Event</a>
    </div>
</div>
@endsection
