<section data-id="hero" id="about-us"
  class="relative py-[80px] flex items-center max-lg:pt-[40px] max-lg:pb-[60px] after:absolute after:z-1 after:inset-0 after:bg-primary min-h-[calc(100vh-66px)]">
  <div class="relative z-2 w-full">
    <div
      class="px-[15px] mx-auto grid grid-cols-3 gap-[45px] max-w-[1390px] max-xl:grid-cols-2 max-lg:grid-cols-1 max-lg:max-w-[700px] max-lg:gap-[40px]">
      <div class="max-lg:relative h-[512px] max-lg:h-auto max-lg:pt-[100%]" data-opacity-move>
        <?php 
          $image = get_field('hero-image-1');
          if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
          class="max-w-[534px] h-full object-cover max-lg:absolute max-lg:h-full max-lg:inset-0 mx-auto" />
        <?php endif; ?>
      </div>
      <div class="mt-[80px] max-lg:mt-0">
        <p class="text-dark font-thin text-[26px] leading-[31px] mb-[20px] max-lg:text-[20px] max-lg:leading-[24px]"
          data-opacity-move>About Us</p>
        <div
          class="hero__content [&_h1]:text-[40px] [&_h1]:leading-[48px] [&_h1]:font-thin [&_h1]:mb-[60px] [&_h1_strong]:font-thin [&_h1_strong]:text-dark [&_h1_strong]:uppercase max-lg:[&_h1]:text-[30px] max-lg:[&_h1]:leading-[36px] max-lg:[&_h1]:mb-40px[] [&_p]:mb-[20px] [&_p_strong]:font-thin [&_p_strong]:text-dark"
          data-opacity-move>
          <?php the_field('hero-text'); ?></div>
        <div data-opacity-move>
          <a href="<?php the_permalink(27); ?>#contact-form"
            class="group relative rounded-[3px] bg-dark h-[48px] px-[16px] inline-flex items-center cursor-pointer transition-opacity duration-200 ease-in-out hover:opacity-80">
            Contact Us
            <svg width="15.703125" height="12.702881" viewBox="0 0 15.7031 12.7029" fill="none"
              class="ml-[16px] transition-transform duration-200 ease-in-out group-hover:translate-x-[5px]"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.35144L15 6.35144M9.06982 12.3514L12.0349 9.35144L15 6.35144L9.06982 0.35144"
                stroke="#FFFFFF" stroke-opacity="1.000000" stroke-width="1.000000" />
            </svg>
          </a>
        </div>
      </div>
      <div class="max-lg:relative h-[512px] mt-[240px] max-xl:hidden" data-opacity-move>
        <?php 
          $image = get_field('hero-image-2');
          if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
          class="max-w-[534px] object-cover h-full" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>