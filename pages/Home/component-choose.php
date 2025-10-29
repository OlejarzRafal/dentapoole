<section data-id="choose">
  <?php 
    $image = get_field('choose-bg-image');
    if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <div class="choose__container">
    <div class="choose__left" data-opacity-move>
      <?php 
    $image = get_field('choose-image');
    if( !empty( $image ) ): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
    </div>
    <div class="choose__right">
      <p class="choose__sub" data-opacity-move>Happy Patients</p>
      <div class="choose__text" data-opacity-move><?php the_field('choose-text'); ?></div>
      <a href="<?php the_permalink(27); ?>#contact-form" class="choose__link" data-opacity-move>
        Request appointment
        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
            stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
      </a>
    </div>
  </div>
</section>