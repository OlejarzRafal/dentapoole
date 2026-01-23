<div class="header__inner">
  <div class="header__container">
    <div class="header__content">
      <a href="<?= get_home_url(); ?>" class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo" width="190" height="38">
      </a>
      <div class="header__contact">
        <div class="header__contact__info">
          <p><span style="min-width: 80px;display: inline-block;">Telephone:</span><a
              href="tel:<?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
          </p>
          <p><span style="min-width: 80px;display: inline-block;">WhatsApp:</span><a
              href="https://wa.me/<?php the_field('whatsapp', 'options'); ?>"><?php the_field('whatsapp', 'options'); ?></a>
          </p>
        </div>
        <div class="header__book">
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

    <ul class="header__menu --desktop">
      <li>
        <a href="<?php the_permalink(63); ?>">Our practice</a>
        <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
            stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
        <?php get_template_part('components/component', 'menu-practice') ?>
      </li>
      <li class="header__menu__our-offer">
        <a href="<?php the_permalink(77); ?>">Our offer</a>
        <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
            stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
        <?php get_template_part('components/component', 'menu-offer') ?>
      </li>
      <li>
        <a href="<?php the_permalink(117); ?>">Patient Guide</a>
        <svg width="12.703125" height="15.703003" viewBox="0 0 12.7031 15.703" fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path id="Vector 1" d="M6.35156 0L6.35156 15M0.351562 9.06982L3.35156 12.0349L6.35156 15L12.3516 9.06982"
            stroke="#B49463" stroke-opacity="1.000000" stroke-width="1.000000" />
        </svg>
        <?php get_template_part('components/component', 'menu-guide') ?>
      </li>
      <li>
        <a href="<?php the_permalink(27); ?>">Contact</a>
      </li>
      <li class="header__menu__chrysalis">
        <a href="https://cfl-retailer.chrysalisfinance.com/neighbourhood-centre-dental-practice-2555" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chrysalis.jpeg">
        </a>
      </li>
    </ul>
    <div class="burger">
      <div class="burger__item"></div>
    </div>
  </div>
</div>