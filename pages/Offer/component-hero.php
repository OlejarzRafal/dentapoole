<section data-id="hero" id="our-services">
  <div class="hero__inner">
    <div class="hero__container">
      <div class="hero__content" data-opacity-move>
        <?php the_field('hero-text'); ?>
        <div class="hero__content__btn">
          <a href="https://booking.uk.hsone.app/soe/new/%20?pid=UKNGB01" class="btn" target="_blank">
            Book appointment
            <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="hero__image">
        <?php
        $image = get_field('offer_hero_image');
        if ($image):
          // Jeśli zwraca ID, pobierz tablicę
          if (is_numeric($image)) {
            $image_id = $image;
            $image_url = wp_get_attachment_image_url($image_id, 'full');
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          } elseif (is_array($image)) {
            // Jeśli zwraca tablicę
            $image_url = $image['url'];
            $image_alt = $image['alt'];
          } else {
            // Jeśli zwraca URL jako string
            $image_url = $image;
            $image_alt = '';
          }
          if ($image_url):
            ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" />
            <?php
          endif;
        endif;
        ?>
      </div>
    </div>
    <div class="hero__list">
      <?php if (have_rows('hero-list')): ?>
        <?php while (have_rows('hero-list')):
          the_row();
          $content_or_photo = get_sub_field('content_or_photo');
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          $photo = get_sub_field('photo');
          ?>
          <div class="hero__item" data-opacity-move>
            <?php if ($content_or_photo == '0' || $content_or_photo == 0): ?>
              <div class="hero__slide-header">
                <h2 class="hero__slide-title"><?= strip_tags($title); ?></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/touth-icon.png" alt="Icon"
                  class="hero__slide-icon" />
              </div>
              <div class="hero__slide-text"><?= $text; ?></div>
            <?php else: ?>
              <?php if ($photo): ?>
                <?php
                $photo_url = is_array($photo) ? $photo['url'] : wp_get_attachment_image_url($photo, 'full');
                $photo_alt = is_array($photo) ? $photo['alt'] : get_post_meta($photo, '_wp_attachment_image_alt', true);
                ?>
                <div class="hero__slide-image">
                  <img src="<?php echo esc_url($photo_url); ?>" alt="<?php echo esc_attr($photo_alt); ?>" />
                </div>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>