<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
<main data-id="home">
  <?php 
    get_template_part('pages/Home/component', 'hero');
    get_template_part('pages/Home/component', 'book');
    get_template_part('pages/Home/component', 'contact');
    get_template_part('pages/Home/component', 'services');
    get_template_part('pages/Home/component', 'pricing');
    get_template_part('pages/Home/component', 'reviews');
    get_template_part('pages/Home/component', 'choose');
    get_template_part('components/component', 'location');
  ?>
</main>
<?php
get_footer();