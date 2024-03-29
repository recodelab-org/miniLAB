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

//This function is necessary to create menus in WP and to prepare to embed the menus in templates
function register_my_menus() {
  register_nav_menus(
    array(
        'main-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobile Menu DE' ),
        'secondary-menu' => __( 'Secondary Menu' ),
        'main-menu-de' => __( 'Main Menu DE, shortcode [main-menu-de]' ),
        'main-menu-en' => __( 'Main Menu EN, shortcode [main-menu-en]' ),        
        'mobile-menu-de' => __( 'Mobile Menu DE, shortcode [mobile-menu-de]' ),
        'mobile-menu-en' => __( 'Mobile Menu EN, shortcode [mobile-menu-en]' ),
        'secondary-menu-de' => __( 'Secondary Menu DE, shortcode [secondary-menu-de]' ),
        'secondary-menu-en' => __( 'Secondary Menu EN, shortcode [secondary-menu-en]' ),
        'extra-menu' => __( 'Extra Menu, shortcode [extra-menu]' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

//Shortcode Main Menu DE [main-menu-de]
function main_menu_de_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'main-menu-de',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav",
        'echo' => false ) );

}
add_shortcode('main-menu-de', 'main_menu_de_shortcode');

//Shortcode Main Menu EN [main-menu-en]
function main_menu_en_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'main-menu-en',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav",
        'echo' => false ) );

}
add_shortcode('main-menu-en', 'main_menu_en_shortcode');

//Shortcode Mobile Menu DE [mobile-menu-de]
function mobile_menu_de_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'mobile-menu-de',
        'container' => 'nav',
        'container_class'   => "mobile-nav",
        'container_id'      => "mobile-nav",
        'echo' => false ) );

}
add_shortcode('mobile-menu-de', 'mobile_menu_de_shortcode');

//Shortcode Mobile Menu EN [mobile-menu-de]
function mobile_menu_en_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'mobile-menu-en',
        'container' => 'nav',
        'container_class'   => "mobile-nav",
        'container_id'      => "mobile-nav",
        'echo' => false ) );

}
add_shortcode('mobile-menu-en', 'mobile_menu_en_shortcode');

//Shortcode Secondary Menu [secondary-menu]
function secondary_menu_de_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'secondary-menu-de',
        'container' => 'nav',
        'container_class'   => "secondary-nav",
        'container_id'      => "secondary-nav",
        'echo' => false ) );

}
add_shortcode('secondary-menu-de', 'secondary_menu_de_shortcode');

//Shortcode Secondary Menu [secondary-menu]
function secondary_menu_en_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'secondary-menu-en',
        'container' => 'nav',
        'container_class'   => "secondary-nav",
        'container_id'      => "secondary-nav",
        'echo' => false ) );

}
add_shortcode('secondary-menu-en', 'secondary_menu_en_shortcode');

//Shortcode extra Menu [extra-menu]
function extra_menu_shortcode() {

    return wp_nav_menu( array( 
        'theme_location' => 'extra-menu',
        'container' => 'nav',
        'container_class'   => "extra-nav",
        'container_id'      => "extra-nav",
        'echo' => false ) );

}
add_shortcode('extra-menu', 'extra_menu_shortcode');


//Register Widgets
function register_my_widgets() {
    
        register_sidebar( array(
		'name'          => 'Footer Widgets 1',
		'id'            => 'footer-widgets-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
    
        register_sidebar( array(
		'name'          => 'Footer Widgets 2',
		'id'            => 'footer-widgets-2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );


}
add_action( 'widgets_init', 'register_my_widgets' );


add_theme_support( 'post-thumbnails' );

/*
function my_post_thumbnail_caption() {
global $post;

$thumbnail_id    = get_post_thumbnail_id($post->ID);
$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

if ($thumbnail_image && isset($thumbnail_image[0])) {
echo '<div class="front-caption">'.$thumbnail_image[0]->post_excerpt.'</div>';
}
} */



/**
 * Enqueues theme styles for the editor.
 */
add_action( 'after_setup_theme', function() {

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue block editor stylesheet.
	add_editor_style( '/editor-styles.css' );
} );


/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }

return $urls;
}



/*
miniLAB – a ridiculously simple wordPress theme.
Copyright (C) 2020 - 2022  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
*/
?>
