@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('description', 'Kenali visi, misi, nilai, dan tim di balik ' . config('company.name') . '.')

@section('content')

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Tentang Kami</span>
        <h1>Menghubungkan Anda ke Jaringan yang Lebih Baik</h1>
    </div>
</section>

<section class="section">
    <div class="container two-col">
        <div class="reveal">
            <span class="eyebrow eyebrow-dark">Cerita Kami</span>
            <h2>Berawal dari masalah nyata di lapangan</h2>
        </div>
        <div class="prose reveal">
            <p class="mb-4">{{ config('company.name') }} berdiri pada {{ config('company.founded') }} adalah divisi Internet Service Provider dari PT Bangsawan Cyberindo Indonesia yang menghadirkan layanan internet dedicated untuk perkantoran, industri, lembaga pendidikan, game center, kafe, dan instansi pemerintah.</p>

            <p class="mb-4">Dengan koneksi backbone langsung ke Gedung Cyber dan Indonesia Data Center (IDC), kami menghadirkan konektivitas yang stabil dan berkualitas tinggi didukung oleh layanan dukungan 24 jam untuk menjaga koneksi Anda tetap berjalan setiap saat.</p>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="card-grid two">
            <article class="card reveal">
                <div class="icon-box">@include('partials.icon', ['name' => 'eye'])</div>
                <h3>Visi</h3>
                <p>Menjadi penyedia layanan internet dedicated terdepan dan terpercaya yang memajukan ekosistem digital bisnis, industri, serta instansi di Indonesia melalui infrastruktur jaringan yang andal dan inovatif.</p>
            </article>
            <article class="card reveal">
                <div class="icon-box">@include('partials.icon', ['name' => 'target'])</div>
                <h3>Misi</h3>
                <p>Menghadirkan layanan internet dedicated yang stabil, cepat, dan terhubung langsung ke backbone utama, didukung layanan teknis 24/7 untuk memastikan operasional bisnis pelanggan selalu berjalan tanpa hambatan.</p>
            </article>
        </div>

        <div class="section-head reveal values-head">
            <h2>Nilai yang kami pegang</h2>
        </div>
        <div class="card-grid">
            <article class="card reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'check'])</div>
                <h3>Integritas</h3>
                <p>Kami menjalankan setiap layanan dengan kejujuran, transparansi, dan komitmen penuh untuk menjaga kepercayaan serta keamanan jaringan seluruh pelanggan kami.</p>
            </article>
            <article class="card reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'users'])</div>
                <h3>Kolaborasi</h3>
                <p>Kami percaya bahwa hubungan terbaik dibangun melalui kerja sama yang erat, baik secara internal tim maupun bersama mitra dan pelanggan untuk mencapai solusi digital yang tepat.</p>
            </article>
            <article class="card reveal">
                <div class="icon-box small">@include('partials.icon', ['name' => 'award'])</div>
                <h3>Kualitas</h3>
                <p>Kami selalu memberikan standar performa jaringan dedicated terbaik, kestabilan koneksi berkecepatan tinggi, dan dukungan teknis 24/7 tanpa kompromi.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow eyebrow-dark">Tim Kami</span>
            <h2>Orang-orang di balik layar</h2>
            <p>Gabungan network engineer, spesialis infrastruktur, dan konsultan solusi yang siap menjaga konektivitas bisnis Anda.</p>
        </div>

        <div class="team-grid">
            @foreach ($team as $member)
                <article class="team-card reveal">
                    <div class="avatar" style="--from: {{ $member->color_from }}; --to: {{ $member->color_to }};">
                        {{ $member->initials }}
                    </div>
                    <h3>{{ $member->name }}</h3>
                    <div class="role">{{ $member->position }}</div>
                    <p>{{ $member->bio }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
