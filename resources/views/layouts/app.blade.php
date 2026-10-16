<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | {{ config('company.name') }}</title>
    <meta name="description" content="@yield('description', config('company.tagline'))">
    <meta name="theme-color" content="#0b1020">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#konten">Lewati ke konten</a>

    <header class="site-header" id="siteHeader">
        <div class="container header-inner">
            <a href="{{ route('home') }}" class="brand" aria-label="{{ config('company.name') }} - Beranda">
                <span class="brand-mark">
                    <img src="{{ asset('images/MAXMEDIA.webp') }}" alt="{{ config('company.name') }}" width="50" height="50">
                </span>
                <span class="brand-name">{{ config('company.name') }}</span>
            </a>

            <button class="nav-toggle" id="navToggle" aria-label="Buka menu" aria-expanded="false" aria-controls="mainNav">
                <span></span><span></span><span></span>
            </button>

            <nav class="main-nav" id="mainNav" aria-label="Navigasi utama">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Layanan</a>
                <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portofolio</a>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-sm nav-cta">Hubungi Kami</a>
            </nav>
        </div>
    </header>

    <main id="konten">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-about">
                <a href="{{ route('home') }}" class="brand brand-light">
                    <span class="brand-mark">
                        <img src="{{ asset('images/MAXMEDIA.webp') }}" alt="{{ config('company.name') }}" width="50" height="50">
                    </span>
                    <span class="brand-name">{{ config('company.name') }}</span>
                </a>
                <p>{{ config('company.about') }}</p>
                <div class="socials">
                    @foreach (config('company.socials') as $label => $url)
                        <a href="{{ $url }}" aria-label="{{ $label }}">{{ $label }}</a>
                    @endforeach
                </div>
            </div>

            <div>
                <h4>Navigasi</h4>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('services') }}">Layanan</a></li>
                    <li><a href="{{ route('portfolio') }}">Portofolio</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>

            <div>
                <h4>Hubungi Kami</h4>
                <ul class="contact-list">
                    <li>@include('partials.icon', ['name' => 'pin']) <span>{{ config('company.address') }}</span></li>
                    <li>@include('partials.icon', ['name' => 'mail']) <span>{{ config('company.email') }}</span></li>
                    <li>@include('partials.icon', ['name' => 'phone']) <span>{{ config('company.phone') }}</span></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <span>&copy; {{ now()->year }} {{ config('company.name') }}. Hak cipta dilindungi.</span>
            <span>Dibuat dengan Laravel</span>
        </div>
    </footer>
</body>
</html>
