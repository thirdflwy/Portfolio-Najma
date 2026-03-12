// ── Custom Cursor ──────────────────────────────────
const dot = document.getElementById('cursorDot');
if (dot) {
    document.addEventListener('mousemove', e => {
        dot.style.left = e.clientX + 'px';
        dot.style.top  = e.clientY + 'px';
    });
}

// ── Navbar shrink on scroll ────────────────────────
const navbar = document.getElementById('navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });
}

// ── Mobile nav toggle ──────────────────────────────
const toggle   = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
if (toggle && navLinks) {
    toggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
    // Tutup nav kalau klik di luar
    document.addEventListener('click', e => {
        if (!navbar.contains(e.target)) {
            navLinks.classList.remove('open');
        }
    });
}

// ── Scroll Reveal ──────────────────────────────────
const revealEls = document.querySelectorAll('.reveal');
if (revealEls.length) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    revealEls.forEach(el => observer.observe(el));
}

// ── Project filter ─────────────────────────────────
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        document.querySelectorAll('.proj-card').forEach(card => {
            card.style.display =
                (filter === 'all' || card.dataset.category === filter)
                    ? 'block' : 'none';
        });
    });
});
