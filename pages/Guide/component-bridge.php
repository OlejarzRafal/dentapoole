<section data-id="bridge" id="lost-crown">
  <div class="bridge__inner">
    <div class="bridge__container">
      <div class="bridge__content section-content" data-opacity-move><?php the_field('bridge-content'); ?></div>
      <div class="bridge__image" data-opacity-move>
        <?php 
        $image = get_field('bridge-image');
        if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>