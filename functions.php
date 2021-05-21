<?php

function minilab_stylesheets() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
    wp_enqueue_style( 'inter-font', get_template_directory_uri() . '/fonts/inter/font-style.css' );
    wp_enqueue_style( 'merriweather-font', get_template_directory_uri() . '/fonts/merriweather/font-style.css' );
    wp_enqueue_style( 'petrona-font', get_template_directory_uri() . '/fonts/petrona/font-style.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/fontawesome/css/all.css' );
    wp_enqueue_style( 'minilab-block-styles', get_template_directory_uri() . '/minilab-block-styles.css' );
}
add_action( 'wp_enqueue_scripts', 'minilab_stylesheets' );

function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );


function my_post_thumbnail_caption() {
global $post;

$thumbnail_id    = get_post_thumbnail_id($post->ID);
$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

if ($thumbnail_image && isset($thumbnail_image[0])) {
echo '<div class="front-caption">'.$thumbnail_image[0]->post_excerpt.'</div>';
}
} 

//https://wpassist.me/how-to-remove-block-library-css-from-wordpress/
// /wp-includes/css/dist/block-library/style.min.css

function wpassist_remove_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
} 
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

/*

add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
    wp_dequeue_style( 'wp-block-library' ); // WordPress core
    wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce
    wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}
*/

/*
miniLAB – a ridiculously simple wordPress theme.
Copyright (C) 2020 - 2021  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
*/
?>
