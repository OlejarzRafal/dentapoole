<div id="menu-mobile">
  <div class="menu-mobile__container">
    <ul class="menu-mobile__main">
      <li>
        <a href="<?php the_permalink(63); ?>" class="menu-mobile__link">Our Practice</a>
        <button class="menu-mobile__arrow --menu-trigger" type="button" aria-label="Toggle submenu">
          <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
              stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </button>
        <div class="menu-sub">
          <div class="menu-sub__wrapper">
            <?php if (have_rows('practice-menu', 'options')): ?>
              <?php while (have_rows('practice-menu', 'options')):
                the_row();
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                ?>
                <a href="<?php the_permalink(63); ?>#<?= $link; ?>" class="menu-sub__link"><?= $title; ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </li>
      <li>
        <a href="<?php the_permalink(77); ?>" class="menu-mobile__link">Our Offer</a>
        <button class="menu-mobile__arrow --menu-trigger" type="button" aria-label="Toggle submenu">
          <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
              stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </button>
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

                // Check if this is "Our Services" - check by title
                $is_services = false;
                $services_page_id = null;
                if ($title && stripos(strtolower($title), 'our services') !== false) {
                  $is_services = true;
                  // Get page ID from link URL
                  if ($link && isset($link_url)) {
                    $services_page_id = url_to_postid($link_url);
                    if (!$services_page_id) {
                      // Fallback: try to get by slug
                      $parsed_url = parse_url($link_url);
                      $path = isset($parsed_url['path']) ? $parsed_url['path'] : '';
                      $page_slug = basename(trim($path, '/'));
                      $services_page = get_page_by_path($page_slug);
                      if ($services_page) {
                        $services_page_id = $services_page->ID;
                      }
                    }
                  }
                }
                ?>
                <?php if ($link1): ?>
                  <a href="<?php echo esc_url($link_url1); ?>" class="menu-sub__link"
                    target="<?php echo esc_attr($link_target1); ?>">
                    <?php echo esc_html($link_title1); ?>
                  </a>
                <?php endif; ?>

                <?php if ($is_services && $services_page_id): ?>
                  <div class="menu-sub-item --active">
                    <a href="<?php echo esc_url($link_url); ?>" class="menu-sub__link menu-sub-item__trigger"
                      target="<?php echo esc_attr($link_target); ?>">
                      <?= $title; ?>
                    </a>
                    <div class="menu-sub-nested">
                      <div class="menu-sub-nested__wrapper">
                        <?php
                        $child_pages = get_children(array(
                          'post_parent' => $services_page_id,
                          'post_type' => 'page',
                          'post_status' => 'publish',
                          'orderby' => 'menu_order',
                          'order' => 'ASC'
                        ));
                        if ($child_pages):
                          foreach ($child_pages as $child_page):
                            ?>
                            <a href="<?php echo get_permalink($child_page->ID); ?>" class="menu-sub__link">
                              <?php echo esc_html($child_page->post_title); ?>
                            </a>
                            <?php
                          endforeach;
                        endif;
                        ?>
                      </div>
                    </div>
                  </div>
                <?php else: ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="menu-sub__link"
                    target="<?php echo esc_attr($link_target); ?>">
                    <?= $title; ?>
                  </a>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </li>
      <li>
        <a href="<?php the_permalink(117); ?>" class="menu-mobile__link">Patient Guide</a>
        <button class="menu-mobile__arrow --menu-trigger" type="button" aria-label="Toggle submenu">
          <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
              stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </button>
        <div class="menu-sub">
          <div class="menu-sub__wrapper">
            <?php if (have_rows('guide-menu', 'options')): ?>
              <?php while (have_rows('guide-menu', 'options')):
                the_row();
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                ?>
                <a href="<?php the_permalink(117); ?>#<?= $link; ?>" class="menu-sub__link"><?= $title; ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
            <a href="<?php the_permalink(117); ?>#location" class="menu-sub__link">Location</a>
            <?php
            $link = get_field('guide-pdf_leaflet', 'options');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="menu-sub__link" href="<?php echo esc_url($link_url); ?>"
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
              <a class="menu-sub__link" href="<?php echo esc_url($link_url); ?>"
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
      </li>
      <li>
        <a href="<?php the_permalink(27); ?>" class="menu-mobile__link">Contact</a>
      </li>
      <li>
        <a href="https://cfl-retailer.chrysalisfinance.com/neighbourhood-centre-dental-practice-2555" target="_blank">
          <img style="width:200px" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chrysalis.jpeg">
        </a>
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