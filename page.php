<?php
get_header(); ?>
<div class="page-default">
    <div class="hero__container">
        <h1><?php the_title(); ?></h1>
        <div class="page-default__content">
            <?php
            the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer();