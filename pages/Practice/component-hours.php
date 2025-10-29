<section data-id="hours" id="working-hours"
  class="flex items-center relative py-[181px] max-xl:py-[120px] max-lg:py-[60px] after:absolute after:inset-0 after:bg-overlay after:z-1">
  <?php
  $image = get_field('hours-bg-image');
  if (!empty($image)): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
      class="absolute inset-0 bg-overlay object-cover z-0 h-full" />
  <?php endif; ?>
  <div class="relative w-full z-10">
    <div class="__container flex items-center max-lg:flex-col">
      <div
        class="max-w-[685px] mr-[79px] max-xl:max-w-[550px] max-xl:mr-[40px] max-lg:h-[400px] max-lg:relative max-lg:w-full max-lg:max-w-full max-lg:mr-0 max-lg:mt-[60px] order-2 max-sm:h-auto max-sm:pt-[100%]"
        data-opacity-move>
        <?php
        $image = get_field('hours-image');
        if (!empty($image)): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
            class="max-lg:absolute max-lg:inset-0 max-lg:h-full max-lg:object-cover" />
        <?php endif; ?>
      </div>
      <div class="order-2 max-lg:order-1 max-lg:w-full" data-opacity-move>
        <h2 class="text-[56px] font-light leading-snug mb-[40px] max-lg:text-[36px]">Opening<strong
            class="font-light text-primary"> TIMES</strong></h2>
        <p class="text-[24px] leading-relaxed max-lg:text-[14px] max-lg:leading-snug"><?php the_field('hours-hours'); ?>
        </p>
      </div>
    </div>
  </div>
</section>