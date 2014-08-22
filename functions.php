<?php

/**
 * Remove Admin bar when Logged In
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Remove WP Meta Generator
 */

remove_action('wp_head', 'wp_generator');

/**
 * Add Theme Support Items
 */

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

?>