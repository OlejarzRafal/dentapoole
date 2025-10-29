<section data-id="hero" id="our-services">
  <div class="hero__inner">
    <div class="hero__container">
      <div class="hero__content" data-opacity-move><?php the_field('hero-text'); ?></div>
    </div>
    <div class="hero__list">
      <?php if( have_rows('hero-list') ): ?>
      <?php while( have_rows('hero-list') ): the_row(); 
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        ?>
      <div class="hero__item" data-opacity-move>
        <div class="hero__container">
          <div class="hero__left">
            <h3 class="hero__title">
              <?= $title; ?>
              <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path id="Vector 1"
                  d="M6.35156 0L6.35156 15M0.351562 9.06976L3.35156 12.0349L6.35156 15L12.3516 9.06976" stroke="#0F0F0F"
                  stroke-opacity="1.000000" stroke-width="1.000000" />
              </svg>

            </h3>
            <div class="hero__text">
              <div class="hero__text-inner">
                <p><?= $text; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="hero__right">
          <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>