@extends('layouts.app')

@section('title', 'Beranda - Informasi Event Kampus UNUD')

@section('content')
<div class="hero">
    <div class="container">
        <h1 class="display-4 mb-3">📅 Informasi Event Kampus UNUD</h1>
        <p class="lead mb-4">Temukan dan ikuti berbagai event menarik di kampus Universitas Udayana</p>
        <a href="/events" class="btn btn-light btn-lg">Lihat Daftar Event</a>
    </div>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-lg-4 mb-4">
            <div class="card text-center">
                <div class="card-body p-4">
                    <h2 class="card-title mb-3">📚 Webinar</h2>
                    <p class="card-text">Ikuti sesi pembelajaran online dengan para pembicara terkemuka di berbagai bidang.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card text-center">
                <div class="card-body p-4">
                    <h2 class="card-title mb-3">🏆 Lomba</h2>
                    <p class="card-text">Tanpilkan bakat Anda dan kompetisi dengan mahasiswa lainnya dari seluruh kampus.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card text-center">
                <div class="card-body p-4">
                    <h2 class="card-title mb-3">🤝 Pengabdian</h2>
                    <p class="card-text">Berkontribusi pada masyarakat melalui kegiatan pengabdian yang bermakna.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body p-5">
                    <h3 class="card-title mb-3">Mengapa Mengikuti Event?</h3>
                    <ul class="mb-0">
                        <li class="mb-2">✅ <strong>Tingkatkan Skill</strong> - Belajar dari para ahli di bidangnya</li>
                        <li class="mb-2">✅ <strong>Dapatkan Sertifikat</strong> - Sertifikat kehadiran untuk setiap event</li>
                        <li class="mb-2">✅ <strong>Peroleh SKP</strong> - Akumulasi Sistem Kredit Pelatihan untuk pengembangan karir</li>
                        <li class="mb-2">✅ <strong>Networking</strong> - Bertemu dengan mahasiswa dan profesional lainnya</li>
                        <li>✅ <strong>Kesempatan Emas</strong> - Jangan lewatkan peluang berharga untuk pengembangan diri</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-4">
        <h3>Event Terbaru</h3>
        <p class="text-muted">Mulai daftar event sekarang juga!</p>
        <a href="/events" class="btn btn-primary btn-lg">Lihat Semua Event →</a>
    </div>
</div>
@endsection
