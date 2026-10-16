@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="container hero-inner">
        <div class="hero-copy">
            <span class="eyebrow">Mitra teknologi sejak {{ config('company.founded') }}</span>
            <h1>{{ config('company.tagline') }}</h1>
            <p class="lead">{{ config('company.about') }}</p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                    Konsultasi Gratis @include('partials.icon', ['name' => 'arrow'])
                </a>
                <a href="{{ route('portfolio') }}" class="btn btn-ghost btn-lg">Lihat Portofolio</a>
            </div>
        </div>

        <div class="hero-visual" aria-hidden="true">
            <div class="mock">
                <div class="mock-bar"><i></i><i></i><i></i></div>
                <div class="mock-body">
                    <div class="mock-line w60"></div>
                    <div class="mock-line w90"></div>
                    <div class="mock-line w40"></div>
                    <div class="mock-grid">
                        <div class="mock-card"></div>
                        <div class="mock-card"></div>
                        <div class="mock-card"></div>
                    </div>
                </div>
            </div>
            <div class="float-card fc-1">
                @include('partials.icon', ['name' => 'zap'])
                <div><strong>Cepat</strong><small>Rilis tepat waktu</small></div>
            </div>
            <div class="float-card fc-2">
                @include('partials.icon', ['name' => 'shield'])
                <div><strong>Aman</strong><small>Standar keamanan tinggi</small></div>
            </div>
        </div>
    </div>
</section>

{{-- STATISTIK --}}
<section class="stats">
    <div class="container stats-grid">
        @foreach ($stats as $stat)
            <div class="stat reveal">
                <div class="stat-value">
                    <span data-count="{{ $stat['value'] }}">{{ $stat['value'] }}</span>{{ $stat['suffix'] }}
                </div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
        @endforeach
    </div>
</section>

{{-- LAYANAN --}}
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow eyebrow-dark">Layanan Kami</span>
            <h2>Membangun Koneksi yang Andal untuk Operasional Bisnis Tanpa Batas</h2>
        </div>

        <div class="card-grid">
            @foreach ($services as $service)
                <article class="card service-card reveal">
                    <div class="icon-box">@include('partials.icon', ['name' => $service->icon])</div>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </article>
            @endforeach
        </div>

        <div class="section-more reveal">
            <a href="{{ route('services') }}" class="link-arrow">
                Lihat semua layanan @include('partials.icon', ['name' => 'arrow'])
            </a>
        </div>
    </div>
</section>

{{-- MENGAPA KAMI --}}
<section class="section section-alt">
    <div class="container why">
        <div class="why-copy reveal">
            <span class="eyebrow eyebrow-dark">Mengapa Kami</span>
            <h2>Bekerja dengan tim yang fokus pada kestabilan koneksi, bukan sekadar janji speed</h2>
            <p>Kami merancang jaringan dedicated sesuai kebutuhan operasional bisnis Anda. Hasilnya: koneksi stabil 24/7 tanpa lonjakan latensi, langsung terhubung ke backbone Gedung Cyber & IDC.</p>
            <a href="{{ route('about') }}" class="btn btn-primary">Kenal lebih dekat</a>
        </div>
        <div class="why-list">
            <div class="why-item reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'zap'])</div>
                <div><h4>Jaminan SLA 99.5%</h4><p>Garansi uptime tinggi dengan koneksi dedicated 1:1 tanpa bagi trafik.</p></div>
            </div>
            <div class="why-item reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'shield'])</div>
                <div><h4>Koneksi Terhubung Langsung (Direct Peering)</h4><p>Terhubung langsung ke backbone Gedung Cyber & IDC Jakarta untuk latency minimal.</p></div>
            </div>
            <div class="why-item reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'users'])</div>
                <div><h4>Tim Teknisi & NOC Berpengalaman</h4><p>Network Engineer dan tim NOC dedicated yang siap memantau kualitas jaringan Anda.</p></div>
            </div>
            <div class="why-item reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'award'])</div>
                <div><h4>Dukungan Teknis 24/7</h4><p>Layanan bantuan teknis siap sedia setiap saat dengan waktu respons cepat saat terjadi kendala.</p></div>
            </div>
        </div>
    </div>
</section>

{{-- PORTOFOLIO --}}
<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow eyebrow-dark">Portofolio</span>
            <h2>Proyek konektivitas terbaru yang kami kerjakan</h2>
            <p>Beberapa bukti penggelaran jaringan internet dedicated dan solusi infrastruktur bersama klien dari berbagai sektor bisnis.</p>
        </div>

        <div class="card-grid">
            @foreach ($projects as $project)
                @include('partials.project-card', ['project' => $project])
            @endforeach
        </div>

        <div class="section-more reveal">
            <a href="{{ route('portfolio') }}" class="link-arrow">
                Lihat semua proyek @include('partials.icon', ['name' => 'arrow'])
            </a>
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
