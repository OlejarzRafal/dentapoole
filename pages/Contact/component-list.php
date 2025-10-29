<div id="list" class="bg-dark py-[160px] max-lg:py-[60px]">
  <div class="__container grid grid-cols-4 gap-[120px] max-xl:gap-[60px] max-xl:grid-cols-2 max-sm:grid-cols-1">
    <?php if (have_rows('contact-list')): ?>
      <?php while (have_rows('contact-list')):
        the_row();
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        ?>
        <div class="flex items-center flex-col" data-opacity-move>
          <div class="mb-[24px] h-[70px] flex items-center">
            <?php if (!empty($icon)): ?>
              <img src="<?php echo esc_url($icon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($icon['alt']); ?>"
                class="w-auto h-auto object-contain" />
            <?php endif; ?>
          </div>
          <div class="list__text">
            <h3
              class="text-primary mb-[16px] text-[26px] leading-[31px] text-center max-lg:text-[20px] max-lg:leading-[24px]">
              <?php echo $title; ?>
            </h3>
            <div
              class="text-center [&_a]:text-primary [&_a]:inline-block [&_a]:transition-opacity [&_a]:duration-200 [&_a]:ease-in-out [&_a]:hover:opacity-80 max-xl:max-w-[200px] max-sm:max-w-[200px] flex flex-col gap-y-[10px]">
              <?php echo $text; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>