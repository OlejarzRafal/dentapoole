<?php
/* Template Name: Offer */
?>

<?php get_header(); ?>
<main data-id="offer">
  <?php get_template_part('pages/Offer/component', 'hero')?>
  <?php get_template_part('pages/Offer/component', 'charges')?>
  <?php get_template_part('pages/Offer/component', 'free')?>
  <?php get_template_part('pages/Offer/component', 'content')?>
  <?php get_template_part('pages/Offer/component', 'pricing')?>
  <?php get_template_part('components/component', 'location')?>
</main>
<?php
get_footer();