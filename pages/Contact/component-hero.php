<div id="hero"
  class="relative min-h-[calc(100vh-66px)] flex items-center after:absolute after:inset-0 after:z-1 after:bg-overlay">

  <?php 
  $image = get_field('hero-bg-image');
  if( !empty( $image ) ): ?>
  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
    class="absolute inset-0 z-0 object-cover h-full" />
  <?php endif; ?>
  <div class="w-full">
    <div
      class="__container relative z-2 flex justify-between py-[60px] max-lg:max-w-[800px] max-lg:flex-col max-lg:items-start">
      <div class="hero__left max-w-[493px] pt-[40px] mr-[30px] max-lg:mr-0 max-lg:mb-40 max-lg:pt-0 max-lg:max-w-none"
        data-opacity-move><?php the_field('hero-text'); ?></div>
      <div class="relative w-full max-w-[555px] h-[574px] max-lg:h-[346px] max-lg:max-w-none" data-opacity-move>

        <?php 
        $image = get_field('hero-image');
        if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
          class="h-full object-cover" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>