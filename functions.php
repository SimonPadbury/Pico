<?php

// Setup

function pico_setup() {
  add_theme_support('post-thumbnails');
}
add_action('init', 'pico_setup');

// Stylesheet

wp_register_style('styles', get_template_directory_uri() . '/style.css', false, null, null);
wp_enqueue_style('styles');

// Menu

function register_menu() {
  register_nav_menu('menu', __('Menu'));
}
add_action('init', 'register_menu');

// Widget Area

register_sidebar( array(
  'name'          => __('Widgets'),
  'id'            => 'widgets',
  'description'   => '',
  'before_widget' => '',
  'after_widget'  => '',
  'before_title'  => '',
  'after_title'   => '',
) );

?>
