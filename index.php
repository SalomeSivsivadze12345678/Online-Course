<?php
// index.php

$data = require 'data.php';
$pricing_plans = $data['plans'];
$faqs = $data['faqs'];

function format_price($price, $billing) {
    return "
      <div class='price-wrapper'>
        <span class='price-amount'>$price</span>
        <span class='price-billing'>$billing</span>
      </div>
    ";
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pricing Page - Dynamic</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

  <!-- INTRO -->
  <section class="pricing-intro-section container">
    <div class="section-intro-wrapper">
      <h1 class="section-title">Our Pricings</h1>
      <p class="section-intro-text">
        Welcome to SkillBridge's Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you're an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.
      </p>
    </div>
  </section>

  <!-- TOGGLE -->
  <div class="toggle-switch-wrapper">
   <div class="toggle-switch">
    <div class="toggle-option active">Monthly</div>
    <div class="toggle-option">Yearly</div>
   </div>
  </div>

  <!-- PRICING -->
  <section class="pricing-section container">
    <div class="pricing-bg-box">
      <div class="pricing-cards-wrapper">
        <?php foreach ($pricing_plans as $plan): ?>
          <div class="pricing-card <?php echo $plan['id']; ?>">
            
            <div class="plan-title-wrapper">
              <h3 class="plan-title"><?php echo $plan['title']; ?></h3>
            </div>

            <div class="plan-price">
              <?php echo format_price($plan['price'], $plan['billing']); ?>
            </div>

            <!-- Available Features Box -->
            <div class="plan-features-wrapper">
              <p class="plan-description">Available Features</p>
              <ul class="plan-features">
                <?php foreach ($plan['features'] as $feature): ?>
                  <?php if ($feature['available']): ?>
                    <li>
                      <span class="icon-check">✓</span>
                      <?php echo $feature['text']; ?>
                    </li>
                  <?php else: ?>
                    <li>
                      <span class="icon-x">✕</span>
                      <?php echo $feature['text']; ?>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </div>

            <a href="#" class="btn-cta"><?php echo $plan['button_text']; ?></a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section container">
    <div class="faq-wrapper">
      
      <!-- Left column -->
      <div class="faq-header">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <p>Still you have any questions? Contact our Team via <br> support@skillbridge.com</p>
        <a href="#" class="btn-faq">See All FAQ’s</a>
      </div>

      <!-- Right column -->
      <div class="faq-column-right">
        <?php foreach ($faqs as $faq): ?>
          <div class="faq-item">
            <div class="faq-question-row">
              <h4 class="faq-question"><?php echo $faq['question']; ?></h4>
              <span class="faq-icon">+</span>
            </div>
            <?php if (!empty($faq['answer'])): ?>
              <div class="faq-answer">
                <p><?php echo $faq['answer']; ?></p>
                <a href="#" class="faq-link">
                  Enrollment Process for Different Courses
                  <span class="arrow">→</span>
                </a>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <script>
    document.querySelectorAll('.faq-item').forEach(item => {
      const questionRow = item.querySelector('.faq-question-row');
      const icon = item.querySelector('.faq-icon');
      const answer = item.querySelector('.faq-answer');

      questionRow.addEventListener('click', () => {
        item.classList.toggle('active');
        if (answer) {
          answer.style.display = item.classList.contains('active') ? 'block' : 'none';
        }
        icon.textContent = item.classList.contains('active') ? '✕' : '+';
      });
    });


     document.querySelectorAll('.toggle-option').forEach(option => {
      option.addEventListener('click', () => {
        document.querySelectorAll('.toggle-option').forEach(o => o.classList.remove('active'));
        option.classList.add('active');
      });
    });
  </script>




</body>
</html>