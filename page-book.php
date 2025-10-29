<?php
/* Template Name: Book and Pay */
?>

<?php get_header(); ?>
<main data-id="book-and-pay">

  <section id="hero">
    <img src="<?php the_field('image'); ?>" alt="" role="presentation" class="hero__image">
    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__title" data-opacity-move><?php the_field('title'); ?></h1>
        <p class="hero__text" data-opacity-move><?php the_field('text'); ?></p>
      </div>
    </div>
  </section>

  <section id="grid">
    <div class="image">
      <img src="<?= get_field('image-grid-1'); ?>" role="presentation" loading="lazy" decoding="async" alt="">
    </div>
    <div class="image">
      <img src="<?= get_field('image-grid-2'); ?>" role="presentation" loading="lazy" decoding="async" alt="">
    </div>
    <div class="image">
      <img src="<?= get_field('image-grid-3'); ?>" role="presentation" loading="lazy" decoding="async" alt="">
    </div>
  </section>

</main>
<?php
get_footer();