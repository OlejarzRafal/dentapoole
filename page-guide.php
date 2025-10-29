<?php
/* Template Name: Patient Guide */
?>

<?php get_header(); ?>
<main data-id="guide">
  <?php get_template_part('pages/Guide/component', 'hero') ?>
  <?php get_template_part('pages/Guide/component', 'advice') ?>
  <?php get_template_part('pages/Guide/component', 'filling') ?>
  <?php get_template_part('pages/Guide/component', 'bridge') ?>
  <?php get_template_part('pages/Guide/component', 'injuries') ?>
  <?php get_template_part('pages/Guide/component', 'injuries-2') ?>
  <?php get_template_part('components/component', 'location') ?>

</main>
<?php
get_footer();