<div id="menu-mobile">
  <div class="menu-mobile__container">
    <ul class="menu-mobile__main">
      <li class="--menu-trigger">
        Our Practice
        <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
            stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
      </li>
      <div class="menu-sub">
        <div class="menu-sub__wrapper">
          <?php if (have_rows('practice-menu', 'options')): ?>
            <?php while (have_rows('practice-menu', 'options')):
              the_row();
              $title = get_sub_field('title');
              $link = get_sub_field('link');
              ?>
              <a href="<?php the_permalink(63); ?>#<?= $link; ?>" class="menu-grid__link"><?= $title; ?></a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <li class="--menu-trigger">
        Our Offer
        <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
            stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
      </li>
      <div class="menu-sub">
        <div class="menu-sub__wrapper">
          <?php if (have_rows('offer-menu', 'options')): ?>
            <?php while (have_rows('offer-menu', 'options')):
              the_row();
              $title = get_sub_field('title');
              $link = get_sub_field('link');
              $link1 = get_sub_field('link_2_optional');
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
              <?php if ($link1): ?>
                <a href="<?php echo esc_url($link_url1); ?>" class="menu-grid__link menu-grid__link--1"
                  target="<?php echo esc_attr($link_target1); ?>">
                  <?php echo esc_html($link_title1); ?>
                </a>
              <?php endif; ?>
              <a href="<?php echo esc_url($link_url); ?>" class="menu-grid__link"
                target="<?php echo esc_attr($link_target); ?>">
                <?= $title; ?>
              </a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <li class="--menu-trigger">
        Patient Guide
        <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
            stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
      </li>
      <div class="menu-sub">
        <div class="menu-sub__wrapper">
          <?php if (have_rows('guide-menu', 'options')): ?>
            <?php while (have_rows('guide-menu', 'options')):
              the_row();
              $title = get_sub_field('title');
              $link = get_sub_field('link');
              ?>
              <a href="<?php the_permalink(117); ?>#<?= $link; ?>" class="menu-guide__link"><?= $title; ?></a>
            <?php endwhile; ?>
          <?php endif; ?>
          <a href="<?php the_permalink(117); ?>#location" class="menu-guide__link">Location</a>
          <?php
          $link = get_field('guide-pdf_leaflet', 'options');
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
      <li>
        <a href="<?php the_permalink(27); ?>">Contact</a>
      </li>
    </ul>
    <div class="menu-mobile__contact flex flex-col gap-y-[10px]">
      <p class="flex items-center gap-x-[6px]"><span style="min-width: 80px;display: inline-block;">Telephone:</span><a
          href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
      </p>
      <p class="flex items-center gap-x-[6px]"><span style=" min-width: 80px;display: inline-block;">WhatsApp:</span><a
          href="https://wa.me/<?php the_field('whatsapp', 'options'); ?>"><?php the_field('whatsapp', 'options'); ?></a>
      </p>
    </div>
    <div class="menu-mobile__book mt-[40px]">
      <?php
      $link = get_field('home_sec2_link_booking', '8');
      if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="group relative rounded-[3px] bg-primary text-dark h-[48px] px-[16px] inline-flex items-center  cursor-pointer transition-opacity duration-200 ease-in-out hover:opacity-80"
          href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
          <?php echo esc_html($link_title); ?>
          <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
            class="ml-[16px] transition-transform duration-200 ease-in-out group-hover:translate-x-[5px]"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
              stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>