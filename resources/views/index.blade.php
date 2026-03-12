<?php
$pageTitle = 'Home';
require_once 'config/db.php';
require_once 'includes/header.php';

$result = $conn->query("SELECT * FROM projects ORDER BY created_at DESC LIMIT 3");
$projects = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
?>

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
</div>

<div class="section">
  <p class="section-label reveal">Selected Works</p>
  <h2 class="section-title reveal">Projects<br><em>terbaru.</em></h2>

  <?php if (empty($projects)): ?>
    <div class="featured-grid">
      <?php for ($i = 1; $i <= 3; $i++): ?>
      <div class="project-card reveal">
        <div class="card-img-placeholder">
          <span>0<?= $i ?></span>
        </div>
        <div class="card-body">
          <p class="card-category">Coming Soon</p>
          <h3 class="card-title">Project <?= $i ?></h3>
          <p class="card-desc">Deskripsi project akan muncul di sini setelah kamu menambahkan project melalui admin panel.</p>
        </div>
      </div>
      <?php endfor; ?>
    </div>

  <?php else: ?>
    <div class="featured-grid">
      <?php foreach ($projects as $p): ?>
      <div class="project-card reveal">
        <?php if (!empty($p['image'])): ?>
          <img src="/portofolio-najma/assets/img/<?= htmlspecialchars($p['image']) ?>"
               alt="<?= htmlspecialchars($p['title']) ?>" class="card-img">
        <?php else: ?>
          <div class="card-img-placeholder">
            <span><?= strtoupper(substr($p['title'], 0, 2)) ?></span>
          </div>
        <?php endif; ?>
        <div class="card-body">
          <p class="card-category"><?= htmlspecialchars($p['category'] ?? 'Project') ?></p>
          <h3 class="card-title"><?= htmlspecialchars($p['title']) ?></h3>
          <p class="card-desc"><?= htmlspecialchars(substr($p['description'], 0, 120)) ?>...</p>
          <?php if (!empty($p['link'])): ?>
            <a href="<?= htmlspecialchars($p['link']) ?>" class="card-link" target="_blank">
              Lihat Project →
            </a>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <div style="margin-top:3rem; text-align:center;">
    <a href="/portofolio-najma/projects.php" class="btn">Lihat Semua Project</a>
  </div>
</div>

<div style="border-top:1px solid rgba(232,228,212,0.15);">
  <div class="section" style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
    <div>
      <p class="section-label reveal">About Me</p>
      <h2 class="section-title reveal">Hai, aku<br><em>Najma.</em></h2>
      <p class="reveal" style="color:var(--text-muted); line-height:1.8; margin-bottom:2rem;">
        Seorang desainer dan developer yang bersemangat dalam menciptakan
        pengalaman digital yang indah dan fungsional. Aku percaya bahwa
        desain yang baik bisa mengubah cara orang berinteraksi dengan dunia.
      </p>
      <a href="/portofolio-najma/about.php" class="btn reveal">More About Me</a>
    </div>
    <div class="reveal" style="display:flex; justify-content:center;">
      <div style="
        width:280px; height:340px;
        border-radius:120px 120px 80px 80px;
        background:linear-gradient(160deg, var(--bg-light), var(--bg-mid));
        border:1px solid var(--cream-border);
        display:flex; align-items:center; justify-content:center;
        font-family:'DM Serif Display', serif;
        font-size:5rem; color:var(--cream-border);
      ">N</div>
    </div>
  </div>
</div>

<div style="border-top:1px solid rgba(232,228,212,0.15); text-align:center;">
  <div class="section">
    <p class="section-label reveal" style="justify-content:center; display:flex;">Let's Connect</p>
    <h2 class="section-title reveal" style="text-align:center;">
      Punya project<br>menarik? <em>Hubungi aku.</em>
    </h2>
    <a href="/portofolio-najma/contact.php" class="btn btn-filled reveal">Get In Touch</a>
  </div>
</div>

<style>
.reveal {
  opacity:0;
  transform:translateY(24px);
  transition: opacity .7s cubic-bezier(.22,1,.36,1), transform .7s cubic-bezier(.22,1,.36,1);
}
.reveal.revealed { opacity:1; transform:translateY(0); }

@media(max-width:768px){
  .section > div[style*="grid"] {
    grid-template-columns:1fr !important;
    gap:2rem !important;
  }
}
</style>

<?php require_once 'includes/footer.php'; ?>
