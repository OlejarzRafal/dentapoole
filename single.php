<?php
/**
 * Single Post Template (single.php) - FINAL VERSION.

 */
get_header();

// --- FUNKCJA BREADCRUMBS ---
if (!function_exists('custom_breadcrumbs')) {
  function custom_breadcrumbs()
  {
    $delimiter = ' &raquo; ';
    $home_text = 'Home';
    $currentBefore = '<span class="current">';
    $currentAfter = '</span>';

    // Pobieranie ID strony ustawionej jako Strona z wpisami
    $blog_page_id = get_option('page_for_posts');
    $blog_page_title = get_the_title($blog_page_id);
    $blog_page_link = get_permalink($blog_page_id);

    if (!is_home() && !is_front_page() && is_single()) {
      echo '<div class="breadcrumbs-wrap">';

      // 1. Link Home
      echo '<a href="' . esc_url(home_url()) . '">' . $home_text . '</a> ' . $delimiter;

      // 2. Link do strony Bloga
      if ($blog_page_id) {
        echo '<a href="' . esc_url($blog_page_link) . '">' . esc_html($blog_page_title) . '</a> ' . $delimiter;
      }

      // 3. Tytuł aktualnego wpisu
      echo $currentBefore . get_the_title() . $currentAfter;

      echo '</div>';
    }
  }
}
// --- KONIEC FUNKCJI BREADCRUMBS ---
?>

<style>
  /* 1. KOREKTA NAGŁÓWKA I BIAŁEGO TEKSTU */
  .site-main {
    padding-top: 50px;
  }

  .site-main,
  .site-main p,
  .site-main h1,
  .site-main h2,
  .site-main h3,
  .site-main a {
    color: #000 !important;
  }

  /* 2. OGRANICZENIE SZEROKOŚCI TREŚCI I UKŁAD KOLUMN */
  .content-wrapper {
    max-width: 1200px;
    /* Większy kontener, by pomieścić sidebar */
    margin: 0 auto;
    display: flex;
    /* Flexbox dla sidebara i treści */
    gap: 40px;
  }

  .post-content {
    flex: 3;
    /* Treść zajmuje większą część */
  }

  /* 3. STYLIZACJA BREADCRUMBS */
  .breadcrumbs-wrap {
    font-size: 0.9em;
    margin-bottom: 25px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    color: #777;
    padding: 0 20px;
  }

  .breadcrumbs-wrap a {
    color: #777 !important;
    text-decoration: none;
  }

  .breadcrumbs-wrap a:hover {
    color: #b49463 !important;
  }

  .breadcrumbs-wrap .current {
    font-weight: 600;
    color: #000;
  }

  /* 4. STYLIZACJA SIDEBARA */
  .sidebar {
    flex: 1;
    /* Sidebar zajmuje mniejszą część */
    padding: 20px;
    border-left: 1px solid #eee;
  }

  .sidebar-title {
    color: #b49463 !important;
    font-size: 1.5em !important;
    font-weight: 700 !important;
    margin-top: 0 !important;
    margin-bottom: 20px !important;
    border-bottom: 2px solid #eee;
    padding-bottom: 5px;
  }

  .related-posts-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .related-posts-list li {
    border-bottom: 1px dashed #eee;
    padding: 10px 0;
  }

  .related-posts-list li a {
    font-weight: 500;
    color: #000 !important;
  }

  .related-posts-list li a:hover {
    color: #b49463 !important;
  }

  /* 12. STYLE DLA MINIATUREK W SIDEBARZE */
  .sidebar-post-item a {
    display: flex;
    /* Użycie flexbox do ułożenia obok siebie */
    align-items: center;
  }

  .sidebar-thumbnail {
    flex-shrink: 0;
    /* Zapobiega zmniejszaniu się miniatury */
    margin-right: 15px;
    width: 60px;
    /* Stała szerokość miniatury w sidebarze */
    height: 60px;
    /* Stała wysokość */
    overflow: hidden;
  }

  .sidebar-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Wypełnia przestrzeń bez zniekształceń */
    border-radius: 4px;
    /* Opcjonalnie: zaokrąglenie rogów */
  }

  .sidebar-post-title {
    line-height: 1.3;
    font-weight: 600;
  }

  /* 5. STYLIZACJA TREŚCI ARTYKUŁU */
  .entry-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px 0;
    line-height: 1.6;
    font-size: 1.1em;
  }

  /* 6. STYLE DLA NAGŁÓWKÓW (H1, H2, H3, itd.) */
  .entry-header {
    text-align: center;
    margin-bottom: 30px;
  }

  .entry-title {
    font-size: 2.5em;
    line-height: 1.25;
    /* Zwiększono odstęp między wierszami */
    margin-bottom: 25px;
    /* Zwiększono odstęp od metadanych */
    color: #b49463;
  }

  /* 7. STYLIZACJA ZDJĘCIA WYRÓŻNIAJĄCEGO */
  .post-thumbnail {
    margin: 0 auto 40px auto;
    max-width: 900px;
  }

  .post-thumbnail img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
  }

  /* 8. NAPRAWA NAGŁÓWKÓW H2 I H3 W TREŚCI (Użycie !important dla priorytetu) */
  .entry-content h2 {
    color: #b49463 !important;
    font-size: 1.8em !important;
    font-weight: 700 !important;
    margin-top: 40px !important;
    margin-bottom: 25px !important;
    border-bottom: 2px solid #eee;
    padding-bottom: 5px;
    clear: both;
  }

  .entry-content h3 {
    color: #000 !important;
    font-size: 1.4em !important;
    font-weight: 600 !important;
    margin-top: 30px !important;
    margin-bottom: 10px !important;
    clear: both;
  }

  /* 9. STYLE DLA LIST (LISTING) */
  .entry-content ul,
  .entry-content ol {
    margin: 20px 0 20px 20px;
    padding: 0;
    list-style-position: outside;
  }

  .entry-content ul li {
    list-style: disc outside;
    margin-bottom: 8px;
    padding-left: 5px;
  }

  .entry-content ol li {
    list-style: decimal outside;
    margin-bottom: 8px;
    padding-left: 5px;
  }

  /* 10. STYLIZACJA TABELI (FAQ) */
  .entry-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 40px 0;
    font-size: 0.95em;
    border: 2px solid #b49463;
  }

  .entry-content th,
  .entry-content td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
  }

  .entry-content th {
    background-color: #fdfae7;
    font-weight: 700;
    color: #b49463;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .entry-content tr:nth-child(even) {
    background-color: #fafafa;
  }

  /* 11. MEDIA QUERIES (Responsywność) */
  @media (max-width: 1200px) {
    .content-wrapper {
      flex-direction: column;
    }

    .sidebar {
      border-left: none;
      border-top: 1px solid #eee;
      margin-top: 30px;
    }
  }
</style>
<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php custom_breadcrumbs(); // WYWOŁANIE BREADCRUMBS ?>

    <div class="content-wrapper">

      <div class="post-content">
        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <header class="entry-header">
                <h1 class="entry-title">
                  <?php the_title(); ?>
                </h1>

                <div class="entry-meta">
                  <span class="posted-on">Published: <time datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date(); ?>
                    </time></span>

                  <?php
                  $categories = get_the_category();
                  if (!empty($categories)) {
                    echo '<span class="cat-links"> | Category: <a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a></span>';
                  }
                  ?>
                </div>
              </header>
              <?php if (has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail('large'); ?>
                </div>
              <?php endif; ?>

              <div class="entry-content">
                <?php the_content(); ?>
              </div>
              <?php
              if (comments_open() || get_comments_number()):
                comments_template();
              endif;
              ?>

            </article>
          <?php endwhile; else: ?>

          <p>
            <?php _e('Apologies, but the requested post could not be found.'); ?>
          </p>

        <?php endif; ?>
      </div>
      <aside class="sidebar">
        <h3 class="sidebar-title">Latest on the Blog</h3>
        <?php
        // Pobieranie 5 najnowszych wpisów z wyłączeniem obecnego
        $args = array(
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC',
          'post__not_in' => array(get_the_ID())
        );
        $latest_posts = new WP_Query($args);

        if ($latest_posts->have_posts()):
          echo '<ul class="related-posts-list">';
          while ($latest_posts->have_posts()):
            $latest_posts->the_post();
            ?>
            <li class="sidebar-post-item">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                  <div class="sidebar-thumbnail">
                    <?php the_post_thumbnail('thumbnail'); // Użycie najmniejszego rozmiaru 'thumbnail' ?>
                  </div>
                <?php endif; ?>
                <span class="sidebar-post-title">
                  <?php the_title(); ?>
                </span>
              </a>
            </li>
            <?php
          endwhile;
          echo '</ul>';
          wp_reset_postdata(); // Przywrócenie głównej pętli
        else:
          echo '<p>No other posts found.</p>';
        endif;
        ?>
      </aside>
    </div>
  </main>
</div>
<?php get_footer(); ?>