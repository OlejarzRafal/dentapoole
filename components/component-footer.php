<div class="footer__inner">
  <div class="footer__container">
    <div class="footer__left">
      <a href="<?= get_home_url(); ?>" class="footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo" width="190" height="38">
      </a>
      <?php if ($footer_text_1aa = get_field('footer_text_1aa', 'options')): ?>
        <p class="footer__text"><?php echo $footer_text_1aa; ?></p>
      <?php endif; ?>

    </div>
    <div class="footer__right">
      <div class="footer__col">
        <div class="footer__row">
          <h3 class="row-title">Get in touch</h3>
          <?php if ($instagram = get_field('instagram', 'options')): ?>
            <a href="<?php echo esc_html($instagram); ?>" target="_blank" class="--instagram">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Instagram" width="18"
                height="18">
            </a>
          <?php endif; ?>
          <?php if ($facebook = get_field('facebook', 'options')): ?>
            <a href=" <?php echo esc_html($facebook); ?>" target="_blank" class="--facebook">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Logo" width="11"
                height="22">
            </a>
          <?php endif; ?>
        </div>
        <div class="footer__contact contact">
          <div class="contact__row">
            <p class="contact__title">Adress:</p>
            <?php if ($footer_adress = get_field('footer_adress', 'options')): ?>
              <p class="contact__text"><?php echo $footer_adress; ?></p>
            <?php endif; ?>
          </div>
          <div class="contact__row">
            <p class="contact__title">Email:</p>
            <a href="mailto:<?php the_field('email', 'options'); ?>"
              class="contact__text"><?php the_field('email', 'options'); ?></a>
          </div>
          <div class="contact__row">
            <p class="contact__title">Telephone:</p>
            <a href="tel:<?php the_field('phone', 'options'); ?>"
              class="contact__text"><?php the_field('phone', 'options'); ?></a>
          </div>
          <div class="contact__row">
            <p class="contact__title">WhatsApp:</p>
            <a href="https://wa.me/<?php the_field('whatsapp', 'options'); ?>"
              class="contact__text"><?php the_field('whatsapp', 'options'); ?></a>
          </div>
        </div>
      </div>

      <div class="footer__col">
        <div class="footer__row">
          <h3 class="row-title">Accreditations</h3>
        </div>
        <div class="row-logos">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-bda.svg" alt="Logo" width="86"
            height="60" loading="lazy" decoding="async">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-cqq.svg" alt="Logo" width="149"
            height="60" loading="lazy" decoding="async">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-nhs.svg" alt="Logo" width="94"
            height="54" loading="lazy" decoding="async">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-gdc.svg" alt="Logo" width="187"
            height="60" loading="lazy" decoding="async">
        </div>
      </div>
    </div>
  </div>
</div>