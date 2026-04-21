<?php 
$charges_text = get_field('charges-text');
// Usuń wszystkie tagi HTML i sprawdź czy coś zostało
$text_content = strip_tags($charges_text);
if (!empty($text_content) && trim($text_content) !== ''): 
?>
  <section data-id="charges" id="nhs-price-list" class="py-[120px] bg-light max-lg:pt-[80px] max-lg:pb-[60px]">
    <div class="charges__inner">
      <div class="charges__container">
        <div class="charges__text" data-opacity-move><?php echo $charges_text; ?></div>
        <div class="grid grid-cols-3 gap-[21px]  max-xl:ml-0  max-lg:mx-auto max-lg:grid-cols-1 max-lg:gap-[60px]">
          <?php if (have_rows('charges-list')): ?>
            <?php while (have_rows('charges-list')):
              the_row();
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $price = get_sub_field('price');
              $text = get_sub_field('text');
              ?>
              <div class="charges__item">
                <div class="charges__image" data-opacity-move>
                  <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
                </div>
                <div class="charges__title" data-opacity-move><?= $title; ?> <span><?= $price; ?></span></div>
                <div class="charges__desc" data-opacity-move><?= $text; ?></div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>