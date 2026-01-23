<?php
/* Template Name: Services */
?>

<?php get_header(); ?>
<main data-id="services-offer">
    <?php get_template_part('pages/Services/component', 'hero') ?>
    <?php get_template_part('pages/Home/component', 'reviews') ?>
    <?php get_template_part('pages/Offer/component', 'charges') ?>
    <?php get_template_part('pages/Offer/component', 'free') ?>
    <?php get_template_part('pages/Offer/component', 'content') ?>
    <?php get_template_part('pages/Offer/component', 'pricing') ?>
    <?php get_template_part('components/component', 'location') ?>
</main>
<?php
get_footer();