<section data-id="reviews" class="reviews">
  <div class="reviews__inner">
    <div class="reviews__container">
      <div class="reviews__content" data-opacity-move><?php the_field('reviews-content'); ?></div>
      <div class="reviews__main">
        <div class="swiper-wrapper">
          <?php if( have_rows('reviews') ): while( have_rows('reviews') ): the_row(); 
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $stars = get_sub_field('stars');
            $name = get_sub_field('name');
          ?>
          <div class="swiper-slide">
            <div class="reviews-slide">
              <h3 class="reviews-slide__title"><?= $title; ?></h3>
              <div class="reviews-slide__stars">
                <?php
                for ($i = 0; $i < $stars; $i++) {
                  echo '<svg width="15.216797" height="14.472168" viewBox="0 0 15.2168 14.4722" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path id="Star 4" d="M7.6084 0L5.81201 5.52759L0 5.52783L4.7019 8.94434L2.90601 14.4722L7.6084 11.0559L12.3108 14.4722L10.5149 8.94434L15.2168 5.52783L9.40479 5.52759L7.6084 0Z" fill="#B49463" fill-opacity="1.000000" fill-rule="nonzero"/></svg>';
                }
                ?>
              </div>
              <p class="reviews-slide__text"><?= $text; ?></p>
              <p class="reviews-slide__name"><?= $name; ?></p>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="reviews__scroll">
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </div>
  </div>
</section>