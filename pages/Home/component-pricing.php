<section data-id="pricing">
  <?php 
    $image = get_field('pricing-bg-image');
    if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <div class="pricing__container">
    <div class="pricing__wrapper">
      <p class="pricing__sub" data-opacity-move>NHS Dentist</p>
      <div class="pricing__text" data-opacity-move><?php the_field('pricing-text'); ?></div>
      <a href="<?php the_permalink(77); ?>#pricing" class="pricing__link" data-opacity-move>
        Our pricing
        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
            stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
      </a>
    </div>
  </div>
</section>