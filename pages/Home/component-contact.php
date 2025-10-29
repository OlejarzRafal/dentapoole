<section data-id="contact">
  <div class="contact__inner">
    <div class="contact__container">
      <div class="contact__row" data-opacity-move>
        <?php 
          $image = get_field('contact-image-1');
          if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="contact__row">
        <p class="contact__sub" data-opacity-move>About Us</p>
        <div class="contact__content" data-opacity-move><?php the_field('contact-text'); ?></div>
        <div data-opacity-move>
          <a href="<?php the_permalink(27); ?>#contact-form" class="contact__link">
            Contact Us
            <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06982 12.3514L12.0349 9.35144L15 6.35144L9.06982 0.35144"
                stroke="#0f0f0f" stroke-opacity="1.000000" stroke-width="1.000000" />
            </svg>
          </a>
        </div>
      </div>
      <div class="contact__row" data-opacity-move>
        <?php 
          $image = get_field('contact-image-2');
          if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>