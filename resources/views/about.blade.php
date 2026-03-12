@extends('component.layout')

@section('title', 'About')

@section('content')

<div class="page-bg">

    <div class="about-hero">
        <h1 class="about-hero-name">N<sup>a</sup>jm<sup>a</sup> Aini</h1>
        <p class="about-hero-sub">Designer &nbsp;·&nbsp; Developer &nbsp;·&nbsp; Creator</p>
    </div>

    <div class="bio-grid">
        <div class="bio-photo reveal">
            <img src="{{ asset('images/foto.jpg') }}" alt="Najma">
            <span>N</span>
        </div>
        <div class="bio-text">
            <p class="section-label reveal">About Me</p>
            <h2 class="section-title reveal">Halo, aku<br><em>Najma Aini.</em></h2>
            <p class="reveal">
                Seorang mahasiswa yang passionate di bidang desain dan pengembangan web.
                Aku suka menciptakan antarmuka yang tidak hanya indah secara visual,
                tetapi juga nyaman dan intuitif untuk digunakan.
            </p>
            <p class="reveal">
                Dengan pengalaman menggunakan berbagai tools seperti Figma, PHP, dan JavaScript,
                aku selalu berusaha menghadirkan solusi digital yang bermakna dan berdampak.
            </p>
            <div class="bio-stats reveal">
                <div class="stat-card">
                    <span class="stat-num">5+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat-card">
                    <span class="stat-num">2+</span>
                    <span class="stat-label">Tahun Belajar</span>
                </div>
                <div class="stat-card">
                    <span class="stat-num">∞</span>
                    <span class="stat-label">Semangat</span>
                </div>
            </div>
        </div>
    </div>

    <section class="what-i-use">
        <span class="deco-mark">?</span>
        <span class="deco-mark">?</span>

        <h2 class="wiu-title">Wh<sup>a</sup>t I Use</h2>

        <div class="tools-row-1">
            <div class="tool-card">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma">
                <span class="tool-name">Figma</span>
            </div>
            <div class="tool-card">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub">
                <span class="tool-name">GitHub</span>
            </div>
        </div>

        <div class="tools-row-2">
            <div class="tool-card">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                <span class="tool-name">PHP</span>
            </div>
            <div class="tool-card">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code">
                <span class="tool-name">VS Code</span>
            </div>
            <div class="tool-card">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java">
                <span class="tool-name">Java</span>
            </div>
        </div>
    </section>

</div>

@endsection

@push('styles')
<style>
.page-bg {
    background: radial-gradient(ellipse at 40% 20%, #8aab88 0%, #5a7a60 25%, #3f5c44 55%, #2c3f2e 100%);
    min-height: 100vh;
}
.about-hero {
    min-height: 60vh; display: flex; align-items: center; justify-content: center;
    flex-direction: column; text-align: center; padding: 10rem 2rem 4rem;
}
.about-hero-name {
    font-family: 'DM Serif Display', serif; font-size: clamp(3rem, 7vw, 6rem);
    color: var(--cream); line-height: 1;
    opacity: 0; animation: riseIn .9s cubic-bezier(.22,1,.36,1) .1s forwards;
}
.about-hero-name sup { font-size: .4em; font-style: italic; }
.about-hero-sub {
    font-family: 'Unbounded', sans-serif; font-size: clamp(.65rem, 1.1vw, .85rem);
    letter-spacing: .2em; text-transform: uppercase; color: var(--text-muted); margin-top: 1rem;
    opacity: 0; animation: riseIn .8s ease .35s forwards;
}
@keyframes riseIn { from { opacity:0; transform:translateY(24px); } to { opacity:1; transform:translateY(0); } }

.bio-grid {
    display: grid; grid-template-columns: 1fr 1.6fr; gap: 4rem;
    align-items: start; padding: 5rem 4rem; max-width: 1100px; margin: 0 auto;
}
.bio-photo {
    width: 100%; aspect-ratio: 3/4; border-radius: 120px 120px 60px 60px;
    background: linear-gradient(160deg, var(--bg-light), var(--bg-mid));
    border: 1px solid var(--cream-border);
    display: flex; align-items: center; justify-content: center;
    font-family: 'DM Serif Display', serif; font-size: 6rem; color: var(--cream-border); overflow: hidden;
}
.bio-photo img { width: 100%; height: 100%; object-fit: cover; }
.bio-text p { color: var(--text-muted); line-height: 1.9; font-size: .975rem; margin-bottom: 1.2rem; }
.bio-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem; margin-top: 2.5rem; }
.stat-card {
    border: 1px solid var(--cream-border); border-radius: var(--radius);
    padding: 1.2rem; background: var(--cream-dim); text-align: center;
}
.stat-num { font-family: 'DM Serif Display', serif; font-size: 2rem; color: var(--cream); display: block; }
.stat-label {
    font-family: 'Unbounded', sans-serif; font-size: .58rem; letter-spacing: .12em;
    text-transform: uppercase; color: var(--text-muted); margin-top: .3rem; display: block;
}
.what-i-use {
    min-height: 100vh;
    background: radial-gradient(ellipse at 50% 30%, #8aab88 0%, #5a7a60 30%, #3f5c44 60%, #2e4231 100%);
    display: flex; flex-direction: column; align-items: center; justify-content: center;
    padding: 6rem 2rem; position: relative; overflow: hidden;
}
.deco-mark {
    position: absolute; font-family: 'DM Serif Display', serif;
    font-size: clamp(3rem, 6vw, 5rem); color: rgba(74,106,76,0.7);
    font-style: italic; user-select: none; animation: float 4s ease-in-out infinite;
}
.deco-mark:nth-child(1) { top: 12%; left: 8%; animation-delay: 0s; }
.deco-mark:nth-child(2) { top: 10%; right: 8%; animation-delay: 1s; }
@keyframes float { 0%,100%{transform:translateY(0) rotate(-5deg);} 50%{transform:translateY(-14px) rotate(5deg);} }
.wiu-title {
    font-family: 'DM Serif Display', serif; font-size: clamp(2.8rem, 6vw, 5.5rem);
    color: #3a5c3e; text-align: center; margin-bottom: 4rem; line-height: 1;
    opacity: 0; animation: riseIn .8s ease .1s forwards;
}
.wiu-title sup { font-size: .45em; font-style: italic; }
.tools-row-1, .tools-row-2 { display: flex; gap: 1.5rem; justify-content: center; }
.tools-row-2 { margin-top: 1.5rem; }
.tool-card {
    width: 140px; height: 140px;
    background: linear-gradient(145deg, #d6d3c0, #c8c5b0);
    border-radius: 28px;
    box-shadow: 6px 6px 16px rgba(0,0,0,.35), -2px -2px 8px rgba(255,255,255,.15), inset 0 1px 0 rgba(255,255,255,.3);
    display: flex; flex-direction: column; align-items: center; justify-content: center; gap: .6rem;
    transition: transform .3s cubic-bezier(.34,1.56,.64,1), box-shadow .3s;
    cursor: default; opacity: 0; animation: popCard .6s cubic-bezier(.34,1.56,.64,1) forwards;
}
.tool-card:nth-child(1){animation-delay:.2s;} .tool-card:nth-child(2){animation-delay:.35s;}
.tool-card:nth-child(3){animation-delay:.5s;} .tool-card:nth-child(4){animation-delay:.65s;}
.tool-card:nth-child(5){animation-delay:.8s;}
.tool-card:hover { transform: translateY(-8px) scale(1.05); box-shadow: 8px 16px 32px rgba(0,0,0,.4), -2px -2px 8px rgba(255,255,255,.15), inset 0 1px 0 rgba(255,255,255,.3); }
.tool-card img { width: 68px; height: 68px; object-fit: contain; }
.tool-name { font-family: 'Unbounded', sans-serif; font-size: .58rem; letter-spacing: .08em; text-transform: uppercase; color: #5a5a4a; text-align: center; }
@keyframes popCard { from{opacity:0;transform:scale(.75) translateY(20px);} to{opacity:1;transform:scale(1) translateY(0);} }
@media(max-width:768px){
    .bio-grid { grid-template-columns: 1fr; padding: 3rem 1.5rem; }
    .bio-photo { max-width: 260px; margin: 0 auto; }
    .bio-stats { grid-template-columns: 1fr 1fr; }
    .tool-card { width: 110px; height: 110px; }
    .tool-card img { width: 50px; height: 50px; }
}
</style>
@endpush
