<section data-id="services" class="services">
  <div class="services__inner">
    <div class="services__container">
      <div class="services__content">
        <div class="services__text" data-opacity-move><?php the_field('services-text'); ?></div>
        <div class="services__link" data-opacity-move>
          <a href="<?php the_permalink(77); ?>">
            All our services
            <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
            </svg>
          </a>
        </div>
      </div>
      <div class="services__slider">
        <div class="swiper-wrapper">
          <?php if( have_rows('hero-list', 77) ): ?>
          <?php while( have_rows('hero-list', 77) ): the_row(); 
          $image = get_sub_field('image-2');
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          ?>
          <div class="swiper-slide">
            <div class="services-slide">
              <div class="services-slide__image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
              <div class="services-slide__content">
                <h3 class="services-slide__title"><?= $title; ?></h3>
                <p class="services-slide__text"><?= $text; ?></p>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="services__scroll">
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </div>
  </div>
</section>