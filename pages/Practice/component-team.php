<section data-id="team" id="our-team" class="pt-[100px] pb-[120px] bg-dark max-lg:py-[60px]">
  <div>
    <div class="__container">
      <h2
        class="text-[56px] font-thin leading-[67px] text-center text-white mb-[80px] max-lg:text-[30px] max-lg:leading-[38px] max-lg:mb-[60px]"
        data-opacity-move>Our <strong class="text-primary font-thin">TEAM</strong></h2>
      <div
        class="grid grid-cols-4 gap-y-[60px] gap-x-[20px] max-xl:grid-cols-3 max-lg:grid-cols-2 max-lg:max-w-[700px] max-lg:mx-auto max-sm:grid-cols-1 max-sm:gap-[60px] max-sm:max-w-[400px]">
        <?php if (have_rows('team')): ?>
          <?php while (have_rows('team')):
            the_row();
            $image = get_sub_field('image');
            $name = get_sub_field('name');
            $position = get_sub_field('position');
            $desc = get_sub_field('desc');
            ?>
            <div class="team__item" data-opacity-move>
              <div class="h-[318px] mb-[30px]">
                <?php if (!empty($image)): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                    class="h-full object-cover" />
                <?php endif; ?>
              </div>
              <div class="team__content">
                <h3 class="text-primary text-[26px] font-thin leading-tight mb-[10px]"><?php echo $name; ?></h3>
                <p class="text-primary mb-[30px]"><?php echo $position; ?></p>
                <p class="text-white"><?php echo $desc; ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>