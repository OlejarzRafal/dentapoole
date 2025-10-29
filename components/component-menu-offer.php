<div id="menu-grid">
  <div class="menu-grid__container">
    <div class="menu-grid__main">
      <?php if (have_rows('offer-menu', 'options')): ?>
        <?php while (have_rows('offer-menu', 'options')):
          the_row();
          $title = get_sub_field('title');
          $text = get_sub_field('text');
          $link = get_sub_field('link');
          $link1 = get_sub_field('link_2_optional');
          $image = get_sub_field('image');
          if ($link) {
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          }
          if ($link1) {
            $link_url1 = $link1['url'];
            $link_title1 = $link1['title'];
            $link_target1 = $link1['target'] ? $link1['target'] : '_self';
          }
          ?>
          <div class="menu-grid__item">
            <h3 class="menu-grid__title"><?= $title; ?></h3>
            <?php if ($text): ?>
              <p class="menu-grid__text"><?= $text; ?></p>
            <?php endif; ?>
            <?php if ($link1): ?>
              <a href="<?php echo esc_url($link_url1); ?>" class="menu-grid__link menu-grid__link--1"
                target="<?php echo esc_attr($link_target1); ?>">
                <?php echo esc_html($link_title1); ?>
                <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
                    stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
                </svg>
              </a>
            <?php endif; ?>
            <?php if ($link): ?>
              <a href="<?php echo esc_url($link_url); ?>" class="menu-grid__link"
                target="<?php echo esc_attr($link_target); ?>">
                <?php echo esc_html($link_title); ?>
                <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06934 12.3514L12.0352 9.35144L15 6.35144L9.06934 0.35144"
                    stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
                </svg>
              </a>
            <?php endif; ?>
            <?php if ($image): ?>
              <div class="menu-grid__image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="448"
                  height="260" />
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>