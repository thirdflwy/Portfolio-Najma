@extends('component.layout')

@section('title', 'Home')

@section('content')

<section class="hero">
    <div class="hero-star"></div>
    <div class="hero-star"></div>
    <div class="hero-star"></div>

    <div class="hero-content">
        <div class="port-stack">
            <div class="port-row">PORTOFOLIO</div>
            <div class="port-row">PORTOFOLIO</div>
            <div class="port-row">PORTOFOLIO</div>
        </div>
        <div class="hero-name-wrap">
            <div class="hero-bloom"></div>
            <h1 class="hero-name">N<sup>a</sup>jm<sup>a</sup> Aini</h1>
            <p class="hero-tagline">Designer &amp; Developer</p>
        </div>
    </div>

    <div class="hero-scroll">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

<div class="skills-strip">
    <span class="skill-pill">UI / UX Design</span>
    <span class="skill-pill">Web Development</span>
    <span class="skill-pill">PHP &amp; MySQL</span>
    <span class="skill-pill">Figma</span>
    <span class="skill-pill">HTML &amp; CSS</span>
    <span class="skill-pill">JavaScript</span>
</div>

<div class="section">
    <p class="section-label reveal">Selected Works</p>
    <h2 class="section-title reveal">Projects<br><em>terbaru.</em></h2>

    <div class="featured-grid">
        <div class="project-card reveal">
            <div class="card-img-placeholder"><span>01</span></div>
            <div class="card-body">
                <p class="card-category">Web Development</p>
                <h3 class="card-title">Website Ticketing Konser</h3>
                <p class="card-desc">Desain antarmuka aplikasi website untuk pembelian tiket konser</p>
                <a href="{{ route('projects') }}" class="card-link">Lihat Detail →</a>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="card-img-placeholder"><span>02</span></div>
            <div class="card-body">
                <p class="card-category">Web Development</p>
                <h3 class="card-title">Najma's Portfolio</h3>
                <p class="card-desc">Website portfolio pribadi dengan tema hijau elegan menggunakan Laravel dan Vite.</p>
                <a href=" " class="card-link">Lihat Detail →</a>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="card-img-placeholder"><span>03</span></div>
            <div class="card-body">
                <p class="card-category">UI/UX Design</p>
                <h3 class="card-title">Desain aplikasi mobile untuk UMKM</h3>
                <p class="card-desc">Aplikasi mobile untuk memantau prioritas distribusi bantuan ke UMKM yang terdampak bencana</p>
                <a href="" class="card-link">Lihat Detail →</a>
            </div>
        </div>
    </div>

    <div style="margin-top:3rem; text-align:center;">
        <a href="" class="btn">Lihat Semua Project</a>
    </div>
</div>

<div class="about-divider">
    <div class="section about-teaser-grid">
        <div>
            <p class="section-label reveal">About Me</p>
            <h2 class="section-title reveal">Hai, aku<br><em>Najma.</em></h2>
            <p class="reveal about-teaser-text">
                Seorang desainer dan developer yang bersemangat dalam menciptakan
                pengalaman digital yang indah dan fungsional.
            </p>
            <a href="{{ route('about') }}" class="btn reveal">More About Me</a>
        </div>
        <div class="reveal about-photo-wrap">
            <div class="about-photo-placeholder">N</div>
        </div>
    </div>
</div>

<div class="contact-cta-wrap">
    <div class="section">
        <p class="section-label reveal cta-label">Let's Connect</p>
        <h2 class="section-title reveal" style="text-align:center;">
            Punya project<br>menarik? <em>Hubungi aku.</em>
        </h2>
        <a href="{{ route('contact') }}" class="btn btn-filled reveal">Get In Touch</a>
    </div>
</div>

@endsection

@push('styles')
<style>
.about-divider { border-top: 1px solid rgba(232,228,212,0.15); }
.about-teaser-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; }
.about-teaser-text { color: var(--text-muted); line-height: 1.8; margin-bottom: 2rem; }
.about-photo-wrap { display: flex; justify-content: center; }
.about-photo-placeholder {
    width: 280px; height: 340px;
    border-radius: 120px 120px 80px 80px;
    background: linear-gradient(160deg, var(--bg-light), var(--bg-mid));
    border: 1px solid var(--cream-border);
    display: flex; align-items: center; justify-content: center;
    font-family: 'DM Serif Display', serif;
    font-size: 5rem; color: var(--cream-border);
}
.contact-cta-wrap { border-top: 1px solid rgba(232,228,212,0.15); text-align: center; }
.cta-label { justify-content: center; display: flex; }
@media(max-width:768px) {
    .about-teaser-grid { grid-template-columns: 1fr; gap: 2rem; }
}
</style>
@endpush
