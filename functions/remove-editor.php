<?php
add_action('admin_init', 'edit_page_supports');
function edit_page_supports()
{
    // Tablica z ID stron
    $post_ids = [
        // 152,
        // 888,
        // 886,
        // 882,
        // 30
    ];
    // Tablica z nazwami szablonów
    $templates_to_check = [
        'page-offer.php',
        'front-page.php',
        'page-contact.php',
        'page-services.php',

    ];

    // Sprawdzenie, czy edytujemy stronę
    if (isset($_GET['post'])) {
        $post_id = (int) $_GET['post'];

        // Pobranie nazwy szablonu strony
        $current_template = get_page_template_slug($post_id);

        // Sprawdzenie ID strony lub szablonu
        if (in_array($post_id, $post_ids) || in_array($current_template, $templates_to_check)) {
            remove_post_type_support('page', 'editor');
            // remove_post_type_support('page', 'thumbnail'); // Włączone - umożliwia dodanie miniaturki
            remove_post_type_support('page', 'comments');
            remove_post_type_support('page', 'author');
            // remove_post_type_support('page', 'excerpt'); // Włączone - umożliwia dodanie zajawki
            remove_post_type_support('page', 'revisions');
        }
    }
}
