  <?php
function renderAboutIntro($aboutIntro) {
  ?>
  <section class="about-intro container">
    <div class="about-text">
      <h2><?= $aboutIntro['title']; ?></h2>
      <p><?= $aboutIntro['description']; ?></p>
    </div>
    <div class="about-image">
      
    </div>
  </section>
  <?php
}

function renderAchievements($achievements) {
  ?>
  <section class="achievements container">
    <div class="achievements-header">
      <div class="achievements-left">
        <h2 class="achievements-title"><?= htmlspecialchars($achievements['title']); ?></h2>
      </div>
      <div class="achievements-right">
        <?php if (!empty($achievements['description'])): ?>
          <p class="achievements-desc"><?= htmlspecialchars($achievements['description']); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="achievements-grid">
      <?php foreach ($achievements['items'] as $item): ?>
        <article class="achievement-card">
          <div class="achievement-icon">
            <?php if (!empty($item['icon'])): ?>
              <img src="<?= $item['icon']; ?>" alt="<?= htmlspecialchars($item['title']); ?>">
            <?php endif; ?>
          </div>
          <h3><?= htmlspecialchars($item['title']); ?></h3>
          <p><?= htmlspecialchars($item['description']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
  <?php
}

function renderGoals($goals) {
  ?>
  <section class="goals container">
    <h2><?= $goals['title']; ?></h2>
    <div class="goals-grid">
      <?php foreach ($goals['items'] as $goal): ?>
        <div class="goal-card">
          <img src="<?= $goal['icon']; ?>" alt="<?= $goal['title']; ?>">
          <h3><?= $goal['title']; ?></h3>
          <p><?= $goal['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php
}

function renderCTA($cta) {
  ?>
  <section class="cta container">
    <div class="cta-content">
      <h2><?= $cta['title']; ?></h2>
      <p><?= $cta['description']; ?></p>
    </div>
    <div class="cta-divider"></div>
    <div class="cta-action">
      <a href="<?= $cta['button_link']; ?>" class="btn-primary"><?= $cta['button']; ?></a>
    </div>
  </section>
  <?php
}
?>