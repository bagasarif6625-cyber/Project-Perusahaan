@extends('layouts.app')

@section('title', 'Portofolio')
@section('description', 'Kumpulan proyek yang telah dikerjakan ' . config('company.name') . ' untuk berbagai industri.')

@section('content')

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Portofolio</span>
        <h1>Bukti keandalan konektivitas di berbagai sektor bisnis</h1>
        <p class="lead">Jelajahi penanganan instalasi dan penggelaran jaringan dedicated yang telah kami selesaikan untuk klien dari sektor perkantoran, industri, hingga instansi.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="filters" role="group" aria-label="Filter kategori">
            <button type="button" class="chip active" data-filter="all">Semua</button>
            @foreach ($categories as $category)
                <button type="button" class="chip" data-filter="{{ $category }}">{{ $category }}</button>
            @endforeach
        </div>

        <div class="card-grid" id="projectGrid">
            @foreach ($projects as $project)
                @include('partials.project-card', ['project' => $project])
            @endforeach
        </div>
    </div>
</section>

@include('partials.cta')

@endsection
