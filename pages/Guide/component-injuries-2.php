<section data-id="injuries" id="dental-injuries-2">
    <div class="injuries-top">
        <?php
        $image = get_field('injuries-bg-image_2');
        if (!empty($image)): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="injuries-top__container">
            <div class="injuries-top__content section-content" data-opacity-move>
                <?php the_field('injuries-top-content_2'); ?>
            </div>
        </div>
    </div>

    <div class="injuries-list">
        <div class="injuries-list__container">
            <?php if (have_rows('injuries-list_2')): ?>
                <?php while (have_rows('injuries-list_2')):
                    the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    ?>
                    <div class="injuries-list__item" data-opacity-move>
                        <h3 class="injuries-list__title"><?= $title; ?></h3>
                        <div class="injuries-list__content section-content"><?= $content; ?></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="injuries-list__item">
                <a class="group relative rounded-[3px] bg-primary text-dark h-[48px] px-[16px] inline-flex items-center mt-[10px] cursor-pointer transition-opacity duration-200 ease-in-out hover:opacity-80"
                    target="_blank"
                    href="https://uk.mydentalhub.online/v1/view/organization/3402/index.html#/perspectives/3">Book
                    & Pay <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
                        class="ml-[16px] transition-transform duration-200 ease-in-out group-hover:translate-x-[5px]"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path id="Vector 1"
                            d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                            stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
                    </svg></a>
            </div>
        </div>
    </div>


    <!-- <div class="injuries-blocks">
    <div class="injuries-blocks__container">
      <?php if (have_rows('injuries-blocks')): ?>
      <?php while (have_rows('injuries-blocks')):
          the_row();
          $block_image = get_sub_field('image');
          $block_title = get_sub_field('title');
          $block_content = get_sub_field('content');
          ?>
      <div class="injuries-blocks__item">
        <div class="injuries-blocks__image" data-opacity-move>
          <?php if (!empty($block_image)): ?>
          <img src="<?php echo esc_url($block_image['url']); ?>" alt="<?php echo esc_attr($block_image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <h3 class="injuries-blocks__title" data-opacity-move><?= $block_title; ?></h3>
        <div class="injuries-blocks__content section-content" data-opacity-move><?= $block_content; ?></div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div> -->
</section>