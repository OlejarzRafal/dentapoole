<?php
// ACF Theme setting page

function my_acf_op_init()
{
    // Footer tabs
    acf_add_options_page(array(
        'page_title'     => 'Global settings',
        'menu_title'    => 'Global settings',
        'menu_slug'     => 'ustawienia-ogolne',
    ));
};
add_action('acf/init', 'my_acf_op_init');