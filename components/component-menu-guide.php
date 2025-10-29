<div id="menu-guide">
  <div class="menu-guide__container">
    <div class="menu-guide__left">
      <?php if (have_rows('guide-menu', 'options')): ?>
        <?php while (have_rows('guide-menu', 'options')):
          the_row();
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          ?>
          <div class="menu-guide__item">
            <h3 class="menu-guide__title"><?= $title; ?></h3>
            <a href="<?php the_permalink(117); ?>#<?= $link; ?>" class="menu-guide__link">
              Read more
              <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
                  stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
              </svg>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="menu-guide__item">
        <h3 class="menu-guide__title">Pratice Plan</h3>
        <?php
        $link = get_field('guide-pdf_leaflet', 'options');
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="menu-guide__link" style="margin-bottom:15px;" href="<?php echo esc_url($link_url); ?>"
            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
            <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
            </svg>
          </a>
        <?php endif; ?>
        <br>
        <?php
        $link = get_field('guide-pdf_our_plan', 'options');
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="menu-guide__link" href="<?php echo esc_url($link_url); ?>"
            target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
            <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
            </svg>
          </a>
        <?php endif; ?>
      </div>
    </div>
    <div class="menu-guide__right">
      <div class="menu-guide__item">
        <h3 class="menu-guide__title"><?php the_field('guide-location-title', 'options'); ?></h3>
        <p class="menu-guide__text"><?php the_field('guide-location-desc', 'options'); ?></p>
        <a href="<?php the_permalink(117); ?>#<?php the_field('guide-location-link', 'options'); ?>"
          class="menu-guide__link">
          Read more
          <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
              stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </a>
      </div>
      <div class="menu-guide__image">
        <?php
        $image = get_field('guide-location-image', 'options');
        if (!empty($image)): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="448"
            height="260" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>