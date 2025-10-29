<section data-id="filling" id="broken-or-lost-filling">
  <?php 
  $image = get_field('filling-bg-image');
  if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <div class="filling__inner">
    <div class="filling__container">
      <div class="filling__content section-content" data-opacity-move><?php the_field('filling-content'); ?></div>
    </div>
  </div>
</section>