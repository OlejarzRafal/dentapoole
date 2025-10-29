<section data-id="advice" id="emergency-advice">
  <div class="advice__inner">
    <div class="advice__container">
      <div class="advice__content section-content" data-opacity-move><?php the_field('advice-content'); ?></div>
      <div class="advice__block --first">
        <div class="advice__block-image" data-opacity-move>
          <?php
          $image = get_field('advice-block-image-1');
          if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="advice__block-text" data-opacity-move><?php the_field('advice-block-text-1'); ?></div>
      </div>
      <div class="advice__block --second">
        <div class="advice__block-text" data-opacity-move><?php the_field('advice-block-text-2'); ?></div>
        <div class="advice__block-image" data-opacity-move>
          <?php
          $image = get_field('advice-block-image-2');
          if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>