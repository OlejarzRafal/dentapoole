<?php
get_header();
?>
<main data-id="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('pages/Guide/component', 'advice') ?>
  <?php get_template_part('pages/Guide/component', 'filling') ?>
  <?php get_template_part('pages/Guide/component', 'bridge') ?>
  <?php get_template_part('pages/Guide/component', 'injuries') ?>
  <?php get_template_part('pages/Guide/component', 'injuries-2') ?>

    <?php endwhile; else: ?>
    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
    <?php endif; ?>
</main>

<?php
get_footer();