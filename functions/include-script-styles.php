<?php
function add_theme_assets()
{
    $css_path = get_template_directory() . '/assets/css/style.css';
    $js_path = get_template_directory() . '/assets/js/main.js';
    
    // Timestamp ostatniej modyfikacji pliku
    $css_version = file_exists($css_path) ? filemtime($css_path) : time();
    $js_version = file_exists($js_path) ? filemtime($js_path) : time();
    
    // Dodaj timestamp bezpośrednio do URL'a
    $css_url = get_template_directory_uri() . '/assets/css/style.css?ver=' . $css_version;
    $js_url = get_stylesheet_directory_uri() . '/assets/js/main.js?ver=' . $js_version;
    
    // Ręczne wdrażanie bez wp_enqueue (żeby pominąć WordPress cache)
    wp_register_style('style', $css_url, array(), false, 'all');
    wp_enqueue_style('style');
    
    wp_register_script('main', $js_url, array(), false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'add_theme_assets', 999);

// WYMUŚ no-cache na CAŁEJ stronie dla CSS/JS
add_action('send_headers', function() {
    // Dla wszystkich plików
    header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0', true);
    header('Pragma: no-cache', true);
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT', true);
    
    // Service worker bypass (dla PWA/offline cache)
    header('Service-Worker-Allowed: /', true);
}, 1);

// Dodaj meta tag aby przeglądarka nie cachowała
add_action('wp_head', function() {
    echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">' . "\n";
    echo '<meta http-equiv="Pragma" content="no-cache">' . "\n";
    echo '<meta http-equiv="Expires" content="0">' . "\n";
});