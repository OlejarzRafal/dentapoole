<section data-id="hero" id="our-services">
    <div class="hero__inner">
        <div class="hero__container">
            <div class="hero__content" data-opacity-move>
                <?php the_field('hero-text'); ?>
                <div class="hero__content__btn">
                    <a href="https://booking.uk.hsone.app/soe/new/%20?pid=UKNGB01" class="btn" target="_blank">
                        Book appointment
                        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Vector 1"
                                d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="hero__image">
                <?php
                $image = get_field('offer_hero_image');
                if ($image):
                    // Jeśli zwraca ID, pobierz tablicę
                    if (is_numeric($image)) {
                        $image_id = $image;
                        $image_url = wp_get_attachment_image_url($image_id, 'full');
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    } elseif (is_array($image)) {
                        // Jeśli zwraca tablicę
                        $image_url = $image['url'];
                        $image_alt = $image['alt'];
                    } else {
                        // Jeśli zwraca URL jako string
                        $image_url = $image;
                        $image_alt = '';
                    }
                    if ($image_url):
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" />
                        <?php
                    endif;
                endif;
                ?>
            </div>
        </div>
        <div class="hero__list">
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
                        // Ogranicz do 180 znaków
                        $excerpt = mb_substr($excerpt, 0, 200);
                        if (mb_strlen($excerpt) == 200) {
                            $excerpt = mb_substr($excerpt, 0, mb_strrpos($excerpt, ' ')) . '...';
                        }
                        $thumbnail_id = get_post_thumbnail_id($child_page->ID);
                        $thumbnail_url = $thumbnail_id ? wp_get_attachment_image_url($thumbnail_id, 'full') : '';
                        $permalink = get_permalink($child_page->ID);
                        ?>
                        <div class="hero__item hero__item--service" data-opacity-move <?php if ($thumbnail_url): ?>
                                style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');" <?php endif; ?>>
                            <div class="hero__item-link">
                                <div class="hero__item-content">
                                    <div class="hero__item-body">
                                        <h2 class="hero__item-title"><?php echo esc_html($title); ?></h2>
                                        <div class="hero__item-excerpt">
                                            <p><?php echo esc_html($excerpt); ?></p>
                                        </div>
                                    </div>
                                    <a href="<?php echo esc_url($permalink); ?>" class="btn btn--white hero__item-link--desktop">
                                        Read more
                                        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path id="Vector 1"
                                                d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                                                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000"></path>
                                        </svg>
                                    </a>
                                    <a href="<?php echo esc_url($permalink); ?>" class="btn btn--white hero__item-link--mobile">
                                        <svg width="15.703003" height="12.703003" viewBox="0 0 15.703 12.703" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path id="Vector 1"
                                                d="M0 6.3515L15 6.3515M9.06982 12.3515L12.0349 9.3515L15 6.3515L9.06982 0.351501"
                                                stroke="#0F0F0F" stroke-opacity="1.000000" stroke-width="1.000000"></path>
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
    </div>
</section>