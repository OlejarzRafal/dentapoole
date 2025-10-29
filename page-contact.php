<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>
<main data-id="contact">
  <?php get_template_part('pages/Contact/component', 'hero')?>
  <?php get_template_part('pages/Contact/component', 'list')?>
  <?php get_template_part('pages/Contact/component', 'form')?>
  <?php get_template_part('components/component', 'location')?>
</main>
<?php
get_footer();