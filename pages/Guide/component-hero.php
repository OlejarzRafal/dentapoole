<section data-id="hero" id="appointments">
  <?php 
  $image = get_field('hero-bg-image');
  if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <div class="hero__inner">
    <div class="hero__container">
      <div class="hero__content section-content" data-opacity-move><?php the_field('hero-content'); ?></div>
      <div class="hero__images">
        <div class="hero__image --primary" data-opacity-move>
          <?php 
        $image = get_field('hero-image-1');
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="hero__image --secondary" data-opacity-move>
          <?php 
        $image = get_field('hero-image-2');
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>