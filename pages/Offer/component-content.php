<section data-id="content"
  class="py-[164px] relative flex items-center after:absolute after:inset-0 after:z-0 after:bg-overlay max-lg:py-[124px]">
  <?php 
    $image = get_field('content-bg-image');
    if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
    class="absolute inset-0 h-full object-cover z-0" />
  <?php endif; ?>
  <div class="relative z-2 w-full">
    <div class="max-w-[800px] px-[15px] mx-auto">
      <div class="content__text" data-opacity-move><?php the_field('content-text'); ?></div>
    </div>
  </div>
</section>