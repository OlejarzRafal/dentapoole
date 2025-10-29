<?php 
function register_menus()
{
  register_nav_menus(array(
    'main' => esc_html__('Primary'),
    'footer' => esc_html__('Footer'),
  ));
}
add_action('init', 'register_menus');