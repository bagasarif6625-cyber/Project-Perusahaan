@extends('layouts.app')

@section('title', 'Kontak')
@section('description', 'Hubungi ' . config('company.name') . ' untuk konsultasi gratis kebutuhan teknologi bisnis kamu.')

@section('content')

<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Kontak</span>
        <h1>Hubungi kami untuk solusi internet dedicated Anda</h1>
        <p class="lead">Isi formulir di bawah atau hubungi tim teknis dan sales kami langsung. Kami siap membantu menganalisis kebutuhan jaringan Anda.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-layout">
        <div class="contact-info reveal">
            <h2>Informasi Kontak</h2>
            <ul class="info-list">
                <li>
                    <div class="icon-box small">@include('partials.icon', ['name' => 'pin'])</div>
                    <div><strong>Alamat</strong><span>{{ config('company.address') }}</span></div>
                </li>
                <li>
                    <div class="icon-box small">@include('partials.icon', ['name' => 'mail'])</div>
                    <div><strong>Email</strong><span>{{ config('company.email') }}</span></div>
                </li>
                <li>
                    <div class="icon-box small">@include('partials.icon', ['name' => 'phone'])</div>
                    <div><strong>Telepon</strong><span>{{ config('company.phone') }}</span></div>
                </li>
                <li>
                    <div class="icon-box small">@include('partials.icon', ['name' => 'clock'])</div>
                    <div><strong>Jam kerja</strong><span>{{ config('company.hours') }}</span></div>
                </li>
            </ul>
        </div>

        <div class="form-card reveal">
            @if (session('success'))
                <div class="alert alert-success" role="status">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error" role="alert">Mohon periksa kembali isian formulir di bawah.</div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" novalidate>
                @csrf

                {{-- Honeypot: jangan dihapus, disembunyikan lewat CSS --}}
                <div class="hp" aria-hidden="true">
                    <label for="company_url">Jangan diisi</label>
                    <input type="text" id="company_url" name="company_url" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="name">Nama lengkap</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name"
                               class="{{ $errors->has('name') ? 'invalid' : '' }}">
                        @error('name') <small class="error">{{ $message }}</small> @enderror
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                               class="{{ $errors->has('email') ? 'invalid' : '' }}">
                        @error('email') <small class="error">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="field">
                        <label for="phone">No. telepon <span class="optional">(opsional)</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="tel"
                               class="{{ $errors->has('phone') ? 'invalid' : '' }}">
                        @error('phone') <small class="error">{{ $message }}</small> @enderror
                    </div>
                    <div class="field">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                               class="{{ $errors->has('subject') ? 'invalid' : '' }}">
                        @error('subject') <small class="error">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="6" required
                              class="{{ $errors->has('message') ? 'invalid' : '' }}">{{ old('message') }}</textarea>
                    @error('message') <small class="error">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Kirim Pesan @include('partials.icon', ['name' => 'arrow'])
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
