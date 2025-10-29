<?php
/* Template Name: Our Practice */
?>

<?php get_header(); ?>
<main data-id="practice">
  <?php get_template_part('pages/Practice/component', 'hero')?>
  <?php get_template_part('pages/Practice/component', 'team')?>
  <?php get_template_part('pages/Practice/component', 'hours')?>
  <?php get_template_part('components/component', 'location')?>
</main>
<?php
get_footer();