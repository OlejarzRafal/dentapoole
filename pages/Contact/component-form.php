<div id="contact-form" class="bg-[rgb(244,_236,_224)] py-[100px] max-lg:py-[60px]">
  <div class="form__inner">
    <div
      class="__container grid grid-cols-[435px_1fr] gap-[136px] max-xl:gap-[50px] max-lg:gap-[46px] max-lg:grid-cols-1">
      <div class="max-lg:order-2 max-lg:h-[400px] max-sm:relative max-sm:pt-[100%]" data-opacity-move>
        <?php 
          $image = get_field('form-image');
          if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
          class="max-lg:h-full max-lg:object-cover max-sm:absolute max-sm:inset-0" />
        <?php endif; ?>
      </div>
      <div class="form__right">
        <p class="text-dark text-[26px] font-thin leading-[31px] mb-[20px] max-lg:text-[20px] max-lg:leading-[24px]">
          Message</p>
        <h2 class="text-[56px] leading-[67px] font-thin mb-[40px] text-dark max-lg:text-[30px] max-lg:leading-[36px]">
          Submit a Contact <strong class="text-primary font-thin">Message</strong>
        </h2>
        <?= do_shortcode('[contact-form-7 id="4e5a5b2" title="Contact form"]'); ?>
      </div>
    </div>
  </div>
</div>