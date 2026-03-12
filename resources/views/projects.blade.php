@extends('component.layout')

@section('title', 'My Project')

@section('content')

<div class="projects-page">

    <h1 class="projects-title">My Pr<sup>o</sup>ject</h1>

    <div class="filter-tabs">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="UI/UX Design">UI/UX Design</button>
        <button class="filter-btn" data-filter="Web Development">Web Development</button>
    </div>

    <div class="projects-grid">

        <div class="proj-card" data-category="Webs Development">
            <div class="proj-card-bg"></div>
            <div class="proj-card-sheen"></div>
            <span class="proj-card-num">01</span>
            <div class="proj-card-content">
                <p class="proj-category">Web Development</p>
                <h3 class="proj-title">Website Ticketing Konser</h3>
                <p class="proj-desc">Desain antarmuka aplikasi website untuk pembelian tiket konser</p>
                <a href="https://github.com/thirdflwy/TA_PROGDAS_Najma-Qurratu-Aini_21120124120009_Sistem-Ticketing-Konser-Berbasis-PHP.git" class="proj-link" target="_blank">View →</a>
            </div>
        </div>

        <div class="proj-card" data-category="Web Development">
            <div class="proj-card-bg"></div>
            <div class="proj-card-sheen"></div>
            <span class="proj-card-num">02</span>
            <div class="proj-card-content">
                <p class="proj-category">Web Development</p>
                <h3 class="proj-title">Najma's Portfolio</h3>
                <p class="proj-desc">Website portfolio pribadi dibangun menggunakan Laravel, Blade, dan Vite dengan desain tema hijau elegan.</p>
                <a href="https://github.com" class="proj-link" target="_blank">View →</a>
            </div>
        </div>

        <div class="proj-card" data-category="UI/UX Design">
            <div class="proj-card-bg"></div>
            <div class="proj-card-sheen"></div>
            <span class="proj-card-num">03</span>
            <div class="proj-card-content">
                <p class="proj-category">UI/UX Design</p>
                <h3 class="proj-title">Desain aplikasi mobile untuk UMKM</h3>
                <p class="proj-desc">Aplikasi mobile untuk memantau prioritas distribusi bantuan ke UMKM yang terdampak bencana</p>
                <a href="https://github.com/thirdflwy/UMKM_Web.git" class="proj-link" target="_blank">View →</a>
            </div>
        </div>

        <div class="proj-card" data-category="UI/UX Design">
            <div class="proj-card-bg"></div>
            <div class="proj-card-sheen"></div>
            <span class="proj-card-num">04</span>
            <div class="proj-card-content">
                <p class="proj-category">UI/UX Design</p>
                <h3 class="proj-title">Desain Aplikasi Mobile BlueBrain</h3>
                <p class="proj-desc">Desain aplikasi mobile untuk media belajar calistung bagi balita</p>
                <a href="https://www.figma.com/design/ytszkfAYp6p9DHdoiS2rBh/BlueBrain-UI-UX?node-id=0-1&t=z5p7tPsuE1ozSDmg-1" class="proj-link" target="_blank">View →</a>
            </div>
        </div>

    </div>
</div>

@endsection

@push('styles')
<style>
.projects-page {
    min-height: 100vh;
    background: radial-gradient(ellipse at 50% 15%, #7aad7a 0%, #4e7a56 25%, #3a5c42 55%, #2c3f2e 100%);
    padding: 8rem 3rem 6rem;
}
.projects-title {
    font-family: 'DM Serif Display', serif; font-size: clamp(3rem, 7vw, 6rem);
    color: var(--cream-border); text-align: center; margin-bottom: 4rem; line-height: 1;
    opacity: 0; animation: riseIn .9s ease .1s forwards;
}
.projects-title sup { font-size: .42em; font-style: italic; }
.filter-tabs {
    display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;
    margin-bottom: 3rem; opacity: 0; animation: riseIn .7s ease .3s forwards;
}
.filter-btn {
    font-family: 'Unbounded', sans-serif; font-size: .62rem; letter-spacing: .12em;
    text-transform: uppercase; padding: .55rem 1.4rem;
    border: 1px solid var(--cream-border); border-radius: 50px;
    color: var(--text-muted); background: transparent; cursor: pointer; transition: all .3s;
}
.filter-btn:hover, .filter-btn.active { background: var(--cream); color: var(--bg); border-color: var(--cream); }
.projects-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 1.6rem; max-width: 1100px; margin: 0 auto;
}
.proj-card {
    border-radius: 24px; overflow: hidden; position: relative; aspect-ratio: 3/4;
    cursor: pointer; opacity: 0; animation: popCard .6s cubic-bezier(.34,1.56,.64,1) forwards;
    transition: transform .35s cubic-bezier(.22,1,.36,1), box-shadow .35s;
}
.proj-card:nth-child(1){animation-delay:.2s;} .proj-card:nth-child(2){animation-delay:.35s;}
.proj-card:nth-child(3){animation-delay:.5s;} .proj-card:nth-child(4){animation-delay:.65s;}
.proj-card:nth-child(5){animation-delay:.8s;} .proj-card:nth-child(6){animation-delay:.95s;}
.proj-card:hover { transform: translateY(-8px) scale(1.02); box-shadow: 0 24px 60px rgba(0,0,0,.5); }
.proj-card-bg {
    position: absolute; inset: 0;
    background: linear-gradient(145deg, rgba(100,168,108,.55) 0%, rgba(68,130,76,.65) 40%, rgba(50,100,58,.75) 100%);
    backdrop-filter: blur(12px); border: 1px solid rgba(150,210,150,.25);
}
.proj-card-sheen {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,.18) 0%, rgba(255,255,255,.04) 40%, rgba(255,255,255,.10) 70%, transparent 100%);
    pointer-events: none;
}
.proj-card-content {
    position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: flex-end;
    padding: 1.8rem; background: linear-gradient(to top, rgba(30,55,32,.85) 0%, transparent 60%);
    opacity: 0; transform: translateY(12px); transition: opacity .35s, transform .35s;
}
.proj-card:hover .proj-card-content { opacity: 1; transform: translateY(0); }
.proj-card-num {
    position: absolute; top: 1.5rem; left: 1.8rem;
    font-family: 'DM Serif Display', serif; font-size: 3.5rem;
    color: rgba(255,255,255,.15); line-height: 1; pointer-events: none;
}
.proj-category { font-family: 'Unbounded', sans-serif; font-size: .58rem; letter-spacing: .15em; text-transform: uppercase; color: rgba(200,230,200,.7); margin-bottom: .4rem; }
.proj-title { font-family: 'DM Serif Display', serif; font-size: 1.3rem; color: var(--cream); margin-bottom: .5rem; }
.proj-desc { font-size: .8rem; color: rgba(232,228,212,.65); line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
.proj-link { display: inline-flex; align-items: center; gap: .4rem; margin-top: .8rem; font-family: 'Unbounded', sans-serif; font-size: .6rem; letter-spacing: .1em; text-transform: uppercase; color: var(--cream); border-bottom: 1px solid rgba(232,228,212,.3); padding-bottom: 2px; transition: gap .3s; }
.proj-link:hover { gap: .7rem; }
@keyframes riseIn { from{opacity:0;transform:translateY(24px);} to{opacity:1;transform:translateY(0);} }
@keyframes popCard { from{opacity:0;transform:scale(.9) translateY(16px);} to{opacity:1;transform:scale(1) translateY(0);} }
@media(max-width:900px){ .projects-grid { grid-template-columns: repeat(2,1fr); } }
@media(max-width:600px){ .projects-page { padding: 7rem 1.2rem 4rem; } .projects-grid { grid-template-columns: 1fr; } .proj-card-content { opacity:1; transform:translateY(0); } }
</style>
@endpush
