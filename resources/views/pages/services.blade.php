@extends('layouts.app')

@section('title', 'Layanan')
@section('description', 'Layanan pengembangan web, aplikasi mobile, cloud, keamanan siber, dan analitik data dari ' . config('company.name') . '.')

@section('content')

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Layanan</span>
        <h1>Solusi konektivitas internet dedicated untuk bisnis Anda</h1>
        <p class="lead">Pilih paket internet dedicated atau sesuaikan kapasitas bandwidth sesuai skala kebutuhan dan operasional perusahaan Anda.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="card-grid">
            @foreach ($services as $service)
                <article class="card service-card reveal">
                    <div class="icon-box">@include('partials.icon', ['name' => $service->icon])</div>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                    @if (!empty($service->features))
                        <ul class="check-list">
                            @foreach ($service->features as $feature)
                                <li>@include('partials.icon', ['name' => 'check']) {{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow eyebrow-dark">Cara Kerja</span>
            <h2>Alur kerja yang jelas dari awal sampai akhir</h2>
        </div>
        <div class="steps">
            <div class="step reveal"><span>1</span><h4>Konsultasi & Analisis Kebutuhan</h4><p>Memahami kebutuhan bandwidth, jumlah pengguna, lokasi operasional, serta spesifikasi jaringan dedicated yang dibutuhkan bisnis kamu.</p></div>
            <div class="step reveal"><span>2</span><h4>Survei Lokasi & Perencanaan</h4><p>Melakukan site survey teknis, pemetaan jalur kabel/fiber, perancangan topologi jaringan, serta estimasi biaya dan Service Level Agreement (SLA).</p></div>
            <div class="step reveal"><span>3</span><h4>Instalasi & Implementasi</h4><p>Pemasangan perangkat jaringan, penarikan jalur ke backbone Gedung Cyber/IDC, konfigurasi routing, serta pengujian kestabilan koneksi secara menyeluruh.</p></div>
            <div class="step reveal"><span>4</span><h4>Aktivasi & Dukungan 24/7</h4><p>Layanan internet resmi beroperasi dengan pemantauan real-time oleh tim NOC serta dukungan teknis profesional siap sedia 24 jam nonstop.</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container narrow">
        <div class="section-head reveal">
            <span class="eyebrow eyebrow-dark">FAQ</span>
            <h2>Pertanyaan yang sering diajukan</h2>
        </div>
        <div class="faq reveal">
            <details>
                <summary>Berapa lama proses instalasi jaringan internet dedicated?</summary>
                <p>Proses instalasi biasanya memakan waktu 1–3 hari kerja setelah survei lokasi teknis disetujui, tergantung pada tingkat kesulitan jalur kabel dan infrastruktur di lokasi Anda.</p>
            </details>
            <details>
                <summary>Apakah ada biaya survei atau konsultasi awal?</summary>
                <p>Tidak ada. Layanan survei lokasi dan konsultasi awal diberikan secara gratis tanpa komitmen untuk membantu Anda menentukan kapasitas bandwidth yang paling tepat.</p>
            </details>
            <details>
                <summary>Bagaimana dengan keandalan dan kestabilan koneksi yang ditawarkan?</summary>
                <p>Kami menyediakan layanan internet dedicated dengan SLA (Service Level Agreement) hingga 99.5% serta terhubung langsung ke backbone Gedung Cyber dan IDC untuk menjamin performa koneksi tanpa bagi (1:1 ratio).</p>
            </details>
            <details>
                <summary>Apakah tersedia tim dukungan teknis jika terjadi kendala?</summary>
                <p>Ya. Tim Network Operations Center (NOC) dan support teknis kami siap memantau serta menangani kendala Anda 24 jam sehari, 7 hari seminggu.</p>
            </details>
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
