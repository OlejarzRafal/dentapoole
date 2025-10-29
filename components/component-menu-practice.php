<div id="menu-grid">
  <div class="menu-grid__container">
    <div class="menu-grid__main">
      <?php if( have_rows('practice-menu', 'options') ): ?>
      <?php while( have_rows('practice-menu', 'options') ): the_row(); 
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          $link = get_sub_field('link');
          $image = get_sub_field('image');
        ?>
      <div class="menu-grid__item">
        <h3 class="menu-grid__title"><?= $title; ?></h3>
        <p class="menu-grid__text"><?= $text; ?></p>
        <a href="<?php the_permalink(63); ?>#<?= $link; ?>" class="menu-grid__link">
          More information
          <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
              stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </a>
        <div class="menu-grid__image">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="448"
            height="260" />
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>