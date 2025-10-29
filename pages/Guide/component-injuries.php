<section data-id="injuries" id="dental-injuries">
  <div class="injuries-top">
    <?php
    $image = get_field('injuries-bg-image');
    if (!empty($image)): ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    <div class="injuries-top__container">
      <div class="injuries-top__content section-content" data-opacity-move><?php the_field('injuries-top-content'); ?>
      </div>
    </div>
  </div>

  <div class="injuries-list">
    <div class="injuries-list__container">
      <?php if (have_rows('injuries-list')): ?>
        <?php while (have_rows('injuries-list')):
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