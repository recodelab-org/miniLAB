<?php

function my_style() {
    wp_enqueue_style(  'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'my_style' );

function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu' ),
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
//https://wordpress.stackexchange.com/questions/111937/how-to-show-featured-image-caption-only-if-it-exist

?>
