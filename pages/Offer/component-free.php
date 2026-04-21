<?php 
$free_text = get_field('free-text');
$text_content = strip_tags($free_text);
if (!empty($text_content) && trim($text_content) !== ''): 
?>
  <section data-id="free">
    <div class="free__inner">
      <div class="free__container">
        <div class="free__main">
          <div class="free__text" data-opacity-move><?php echo $free_text; ?></div>
          <div class="free__image" data-opacity-move>
            <?php
            $image = get_field('free-image');
            if (!empty($image)): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>