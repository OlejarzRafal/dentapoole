<section id="location" class="relative">
  <div>
    <div class="__container flex items-center max-lg:flex-col">
      <div
        class="max-w-[461px] py-[100px] mr-[103px] max-xl:py-[100px] max-xl:mr-[56px] max-lg:py-[60px] max-lg:mr-0 max-lg:max-w-[800px]">
        <?php if ($footer_header_mini_01 = get_field('footer_header_mini_01', 'options')): ?>
          <p class="text-dark text-[26px] font-thin mb-[20px] leading-[31px] max-lg:text-[20px] max-lg:leading-[24px]"
            data-opacity-move><?php echo esc_html($footer_header_mini_01); ?></p>
        <?php endif; ?>
        <div class="location__content" data-opacity-move>
          <?php if ($footer_header_01 = get_field('footer_header_01', 'options')): ?>
            <h2 class="text-[56px] font-thin mb-[40px] leading-[67px] text-dark max-lg:text-[30px] max-lg:leading-[36px]">
              <?php echo $footer_header_01; ?>
            </h2>
          <?php endif; ?>

          <?php if ($footer_text_01 = get_field('footer_text_01', 'options')): ?>
            <?php echo $footer_text_01; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="max-lg:h-[375px] max-lg:mx-[-15px] max-lg:w-[calc(100%+30px)]">
        <iframe class="absolute w-[50%] right-0 top-0 outline-none h-full max-xl:w-[45%] max-lg:static max-lg:w-full"
          src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d80782.055981612!2d-2.0481029714671073!3d50.7488884857004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x4873a40485bd4fb7%3A0x80cbd39065f1095f!2sNeighbourhood%20Centre%2C%20Culliford%20Cres%2C%20Poole%20BH17%209DW%2C%20United%20Kingdom!3m2!1d50.751958599999995!2d-1.9687926!5e0!3m2!1sen!2spl!4v1707570124286!5m2!1sen!2spl"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>