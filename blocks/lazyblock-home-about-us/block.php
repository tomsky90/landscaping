<section class="home-about">
  <div class="home-about__wrapper">
    <h2 class="home-about__heading"><?php echo esc_html($attributes['home-about-heading']) ?></h2>

    <div class="home-about__tile">
      <div class="home-about__img-wrapper">
        <?php if (isset($attributes['home-about-image']['id'])): ?>
          <?php
          $image_url = wp_get_attachment_image_url($attributes['home-about-image']['id'], 'large');
          $alt_text = get_post_meta($attributes['home-about-image']['id'], '_wp_attachment_image_alt', true);
          ?>
          <img class="home-about__img" src="<?php echo esc_url($image_url); ?>"
            alt="<?php echo esc_attr($alt_text); ?>" />
        <?php endif; ?>


      </div>
      <div class="home-about__text-wrapper">
        <p class="home-about__text">
          <?php echo esc_html($attributes['home-about-text']) ?>
        </p>

        <a href="./about" target="blank" class="cta-link">About Us</a>
      </div>

    </div>
  </div>
</section>