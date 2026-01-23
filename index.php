<?php
/**
 * Default template for archives and the "Posts Page".
 * FINAL VERSION: 3 columns, English, Branded Colors, 16:9 Miniatures, and Header Fix.
 */
get_header(); // Loads header.php 
?>

<style>
    /* Define Brand Color */
    :root {
        --brand-color: #b49463;
    }

    /* -------------------------------------- */
    /* 1. COLOR RESET AND READABILITY */
    /* -------------------------------------- */
    /* Korekta dla nachodzenia header */
    .site-main {
        padding-top: 100px;
        /* DODANO: Odstęp na górze dla oddzielenia od header */
    }

    .site-main,
    .site-main p,
    .site-main h1,
    .site-main h2,
    .site-main h3 {
        color: #000 !important;
        /* Force black color for primary text */
    }

    .site-main a {
        color: var(--brand-color) !important;
        text-decoration: none;
        transition: color 0.3s;
    }

    .site-main a:hover {
        color: #000 !important;
        /* Black on hover for contrast */
    }

    /* -------------------------------------- */
    /* 2. BLOG HEADER STYLING */
    /* -------------------------------------- */
    .page-header {
        margin-bottom: 40px;
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
    }

    .page-title {
        font-size: 3em;
        font-weight: 700;
        margin-top: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--brand-color) !important;
    }

    /* -------------------------------------- */
    /* 3. GRID LAYOUT (FLEXBOX) */
    /* -------------------------------------- */
    .post-grid-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 40px;
    }

    /* SINGLE POST CARD (3 kolumny domyślnie) */
    .blog-post-card {
        flex: 0 0 calc(33.333% - 20px);
        /* 3 kolumny */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #eee;
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        flex-direction: column;
        background-color: #fff;
    }

    .blog-post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* POPRAWKA MINIATURY 16:9 */
    .post-thumbnail {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
        /* Aspect Ratio 16:9 */
        height: 0;
    }

    .post-thumbnail img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .blog-post-card:hover .post-thumbnail img {
        transform: scale(1.05);
    }

    .post-content-wrap {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    /* Mniejsze czcionki dla 3 kolumn */
    .entry-header h2 {
        font-size: 1.25em;
        margin-top: 0;
        margin-bottom: 8px;
        line-height: 1.2;
    }

    .entry-meta {
        font-size: 0.85em;
        color: #777 !important;
        margin-bottom: 12px;
    }

    .entry-content {
        font-size: 0.9em;
        margin-bottom: 12px;
        flex-grow: 1;
    }

    .read-more a {
        display: inline-block;
        padding: 8px 15px;
        background-color: var(--brand-color);
        color: #fff !important;
        border-radius: 5px;
        text-transform: uppercase;
        font-size: 0.9em;
        font-weight: 600;
        transition: background-color 0.3s;
    }

    .read-more a:hover {
        background-color: #000;
    }

    /* -------------------------------------- */
    /* 5. RESPONSIVE (DOSTOSOWANIE PUNKTÓW ZATRZYMANIA) */
    /* -------------------------------------- */

    @media (max-width: 768px) {

        /* Na tabletach: 2 kolumny */
        .blog-post-card {
            flex: 0 0 calc(50% - 15px);
        }
    }

    @media (max-width: 500px) {
        .page-title {
            font-size: 2em;
        }

        /* Na telefonach: 1 kolumna */
        .blog-post-card {
            flex: 0 0 100%;
        }
    }
</style>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <?php if (is_home()): ?>
                <h1 class="page-title">Dental Blog & News</h1>
            <?php else: ?>
                <h1 class="page-title">
                    <?php single_post_title(); ?>
                </h1>
            <?php endif; ?>
        </header>
        <div class="post-grid-container">
            <?php
            // --- START WORDPRESS LOOP ---
            if (have_posts()):

                while (have_posts()):
                    the_post();

                    // Post Card Fragment
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post-card'); ?>>

                        <?php if (has_post_thumbnail()):  // Check for Featured Image ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); // Smallest standard image size ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-content-wrap">
                            <header class="entry-header">
                                <h2><a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a></h2>
                            </header>
                            <div class="entry-meta">
                                Published: <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                            <div class="entry-content">
                                <?php
                                // Excerpt/Content Fallback logic
                                if (has_excerpt()) {
                                    the_excerpt();
                                } else {
                                    // If no manual excerpt, display the first 35 words of the full content
                                    echo wp_trim_words(get_the_content(), 35, '...');
                                }
                                ?>
                            </div>
                            <p class="read-more">
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </p>
                        </div>
                    </article>
                    <?php

                endwhile;

                ?>
            </div>
            <?php

            // Pagination links
            the_posts_navigation();

            else:

                // No posts found
                ?>
            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title">Nothing Found</h1>
                </header>
                <div class="page-content">
                    <p>Apologies, but no posts were found. Please try again later!</p>
                </div>
            </section>
            <?php

            endif;
            // --- END WORDPRESS LOOP ---
            ?>

    </main>
</div>
<?php
get_footer(); // Loads footer.php
?>