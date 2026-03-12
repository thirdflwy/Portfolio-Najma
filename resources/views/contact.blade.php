@extends('component.layout')

@section('title', 'Contact')

@section('content')

<div class="contact-page">

    <div class="meet-me">
        <span class="deco-excl">!</span>
        <span class="deco-excl">!</span>
        <h1 class="meet-title">Meet Me</h1>

        <div class="social-row">
            <a href="mailto:najmaaini1@gmail.com" class="social-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" alt="Gmail">
                <span class="social-name">Gmail</span>
            </a>
            <a href="https://github.com/thirdflwy?tab=repositories" target="_blank" class="social-card">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub">
                <span class="social-name">GitHub</span>
            </a>
            <a href="https://www.linkedin.com/in/najma-qurratu-aini-7a8a06216/" target="_blank" class="social-card linkedin-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
                <span class="social-name">LinkedIn</span>
            </a>
        </div>
    </div>

    <div class="section-divider"></div>

    <div class="contact-info-wrap">
        <p class="section-label">Get In Touch</p>
        <h2 class="section-title">Mari<br><em>berkolaborasi.</em></h2>

        <div class="contact-info-list">
            <div class="info-item">
                <span class="info-icon">✉</span>
                <div>
                    <p class="info-label">Email</p>
                    <a href="mailto:najmaaini1@gmail.com" class="info-value">najmaaini1@gmail.com</a>
                </div>
            </div>
            <div class="info-item">
                <span class="info-icon">⌂</span>
                <div>
                    <p class="info-label">Lokasi</p>
                    <p class="info-value">Indonesia</p>
                </div>
            </div>
            <div class="info-item">
                <span class="info-icon">◎</span>
                <div>
                    <p class="info-label">Status</p>
                    <p class="info-value">Open for collaboration 🌿</p>
                </div>
            </div>
        </div>

        <a href="mailto:najmaaini1@gmail.com" class="btn btn-filled" style="margin-top:2.5rem; display:inline-block;">
            Kirim Email →
        </a>
    </div>

</div>

@endsection

@push('styles')
<style>
.contact-page {
    min-height: 100vh;
    background: radial-gradient(ellipse at 40% 20%, #8aab88 0%, #5a7a5e 28%, #3f5c44 58%, #2c3f2e 100%);
    padding: 8rem 3rem 6rem; position: relative; overflow: hidden;
}
.meet-me { text-align: center; padding-bottom: 5rem; position: relative; }
.deco-excl {
    position: absolute; font-family: 'DM Serif Display', serif;
    font-size: clamp(2.5rem, 5vw, 4.5rem); color: rgba(60,100,64,.75);
    font-weight: 700; user-select: none; animation: float 4s ease-in-out infinite;
}
.deco-excl:nth-child(1) { top: 5%; left: 10%; animation-delay: 0s; }
.deco-excl:nth-child(2) { top: 3%; right: 8%; animation-delay: 1.2s; }
@keyframes float { 0%,100%{transform:translateY(0) rotate(-4deg);} 50%{transform:translateY(-14px) rotate(4deg);} }
.meet-title {
    font-family: 'DM Serif Display', serif; font-size: clamp(3rem, 7vw, 6rem);
    color: #3a5c3e; margin-bottom: 3.5rem; line-height: 1;
    opacity: 0; animation: riseIn .9s ease .1s forwards;
}
.social-row { display: flex; gap: 2rem; justify-content: center; flex-wrap: wrap; }
.social-card {
    width: 150px; height: 150px;
    background: linear-gradient(145deg, #d8d5c2, #c4c1ae);
    border-radius: 28px;
    box-shadow: 6px 6px 18px rgba(0,0,0,.35), -2px -2px 8px rgba(255,255,255,.18), inset 0 1px 0 rgba(255,255,255,.35);
    display: flex; flex-direction: column; align-items: center; justify-content: center; gap: .5rem;
    text-decoration: none; transition: transform .3s cubic-bezier(.34,1.56,.64,1), box-shadow .3s;
    opacity: 0; animation: popCard .6s cubic-bezier(.34,1.56,.64,1) forwards;
}
.social-card:nth-child(1){animation-delay:.25s;} .social-card:nth-child(2){animation-delay:.4s;} .social-card:nth-child(3){animation-delay:.55s;}
.social-card:hover { transform: translateY(-10px) scale(1.06); box-shadow: 8px 18px 40px rgba(0,0,0,.45), -2px -2px 8px rgba(255,255,255,.18), inset 0 1px 0 rgba(255,255,255,.35); }
.linkedin-card { background: linear-gradient(145deg, #e8eaf6, #d8daf2); }
.social-card img { width: 72px; height: 72px; object-fit: contain; }
.social-name { font-family: 'Unbounded', sans-serif; font-size: .58rem; letter-spacing: .1em; text-transform: uppercase; color: #5a5a4a; }
.section-divider { max-width: 700px; margin: 0 auto 4rem; height: 1px; background: var(--cream-border); }
.contact-info-wrap { max-width: 680px; margin: 0 auto; opacity: 0; animation: riseIn .8s ease .6s forwards; }
.contact-info-wrap .section-label { margin-bottom: .8rem; }
.contact-info-wrap .section-title { margin-bottom: 2rem; }
.contact-info-list { display: flex; flex-direction: column; gap: 1.5rem; }
.info-item {
    display: flex; align-items: center; gap: 1.5rem;
    padding: 1.2rem 1.5rem;
    border: 1px solid var(--cream-border); border-radius: var(--radius);
    background: var(--cream-dim);
}
.info-icon { font-size: 1.4rem; color: var(--accent); width: 28px; text-align: center; flex-shrink: 0; }
.info-label { font-family: 'Unbounded', sans-serif; font-size: .58rem; letter-spacing: .12em; text-transform: uppercase; color: var(--accent); margin-bottom: .2rem; }
.info-value { font-size: .95rem; color: var(--cream); }
.info-item a.info-value { transition: color .3s; }
.info-item a.info-value:hover { color: var(--accent); }
@keyframes riseIn { from{opacity:0;transform:translateY(24px);} to{opacity:1;transform:translateY(0);} }
@keyframes popCard { from{opacity:0;transform:scale(.78) translateY(18px);} to{opacity:1;transform:scale(1) translateY(0);} }
@media(max-width:600px){ .contact-page{padding:7rem 1.2rem 4rem;} .social-card{width:120px;height:120px;} .social-card img{width:55px;height:55px;} }
</style>
@endpush
