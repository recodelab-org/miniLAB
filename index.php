<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
    
    <h1><?php bloginfo('title'); ?></h1>
 
<!--    Dies ist der berühmte Loop-->
    <?php 
while( have_posts() ) : the_post();
   the_title();
    the_content();
endwhile;
?>
    
    <footer>
        <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></nav>
    
    </footer>

</body>
</html>
