<section data-id="services" class="services">
  <div class="services__inner">
    <div class="services__container">
      <div class="services__content">
        <div class="services__text" data-opacity-move><?php the_field('services-text'); ?></div>
        <div class="services__link services__link--desktop" data-opacity-move>
          <a href="<?php the_permalink(77); ?>">
            All our services
            <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
            </svg>
          </a>
        </div>
      </div>
      <div class="services__slider">
        <div class="swiper-wrapper">
          <?php
          // Znajdź stronę z szablonem Services
          $services_page = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'page-services.php',
            'number' => 1
          ));

          if (!empty($services_page)) {
            $services_page_id = $services_page[0]->ID;

            // Pobierz dzieci strony Services
            $child_pages = get_children(array(
              'post_parent' => $services_page_id,
              'post_type' => 'page',
              'post_status' => 'publish',
              'orderby' => 'menu_order',
              'order' => 'ASC'
            ));

            if ($child_pages):
              foreach ($child_pages as $child_page):
                $title = $child_page->post_title;
                $excerpt = $child_page->post_excerpt;
                if (empty($excerpt)) {
                  $excerpt = wp_trim_words($child_page->post_content, 30, '');
                }
                // Ogranicz do 200 znaków
                $excerpt = mb_substr($excerpt, 0, 200);
                if (mb_strlen($excerpt) == 200) {
                  $excerpt = mb_substr($excerpt, 0, mb_strrpos($excerpt, ' ')) . '...';
                }
                $thumbnail_id = get_post_thumbnail_id($child_page->ID);
                $thumbnail_url = $thumbnail_id ? wp_get_attachment_image_url($thumbnail_id, 'full') : '';
                $thumbnail_alt = $thumbnail_id ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true) : '';
                $permalink = get_permalink($child_page->ID);
                ?>
                <div class="swiper-slide">
                  <div class="services-slide">
                    <div class="services-slide__image">
                      <?php if ($thumbnail_url): ?>
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="services-slide__content">
                      <div class="services-slide__body">
                        <h3 class="services-slide__title"><?php echo esc_html($title); ?></h3>
                        <div class="services-slide__text"><?php echo esc_html($excerpt); ?></div>
                      </div>
                      <a href="<?php echo esc_url($permalink); ?>"
                        class="services-slide__link services-slide__link--desktop btn btn--white">
                        Read more
                        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path id="Vector 1"
                            d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501" stroke="#0F0F0F"
                            stroke-opacity="1.000000" stroke-width="1.000000"></path>
                        </svg>
                      </a>
                      <a href="<?php echo esc_url($permalink); ?>"
                        class="services-slide__link services-slide__link--mobile btn btn--white">
                        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path id="Vector 1"
                            d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501" stroke="#0F0F0F"
                            stroke-opacity="1.000000" stroke-width="1.000000"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endforeach;
            endif;
          }
          ?>
        </div>
        <div class="services__scroll">
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
      <div class="services__link services__link--mobile" data-opacity-move>
        <a href="<?php the_permalink(77); ?>">
          All our services
          <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path id="Vector 1" d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
              stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>