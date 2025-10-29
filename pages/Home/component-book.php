<section data-id="book"
  class="relative pt-[180px] pb-[200px] flex items-center max-lg:pt-[60px] max-lg:pb-[318px] after:absolute after:inset-0 after:bg-overlay">
  <?php
  $image = get_field('book-bg-image');
  if (!empty($image)): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
      class="absolute inset-0 h-full object-cover z-0" />
  <?php endif; ?>
  <div class="__container flex items-center justify-end flex-col relative z-1 max-md:items-start">
    <div class="max-w-[450px] ml-auto max-md:ml-0 w-full">
      <div class="book__content" data-opacity-move><?php the_field('book-content'); ?></div>
      <div data-opacity-move class="flex gap-[24px] max-md:flex-col">
        <?php
        $link = get_field('home_sec2_link_booking');
        if ($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="group relative rounded-[3px] bg-primary text-dark h-[48px] px-[16px] inline-flex items-center mt-[10px] cursor-pointer transition-opacity duration-200 ease-in-out hover:opacity-80"
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
        <?php
        $link2 = get_field('home_sec2_link_booking_copy');
        if ($link2):
          $link_url2 = $link2['url'];
          $link_title2 = $link2['title'];
          $link_target2 = $link2['target'] ? $link2['target'] : '_self';
          ?>
          <a class="group relative rounded-[3px] bg-primary text-dark h-[48px] px-[16px] inline-flex items-center mt-[10px] cursor-pointer transition-opacity duration-200 ease-in-out hover:opacity-80"
            href="<?php echo esc_url($link_url2); ?>" target="<?php echo esc_attr($link_target2); ?>">
            <?php echo esc_html($link_title2); ?>
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
</section>