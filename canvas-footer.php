<?php
/*
Template Name: miniLAB Canvas Footer
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
  
          <nav class="burger-icon" onclick="toggleMobileNav()">
            <i class="fas fa-bars"></i>
        </nav>

        <nav id="mobile-nav" class="mobile-nav" onclick="hideMobileNav()">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
        </nav>
   
    <div id="upper-wrapper" class="upper-wrapper">
    



            <!--The Loop-->
            <?php while( have_posts() ) : the_post(); ?>


            
                    <?php the_content(); ?>
          


            <?php endwhile; ?>
            <!--Loop ends-->



        </div>
    <!--#upper wrapper -->
    
    <footer id="main-footer" class="main-footer">
    <div class="ehy-footer-content-wrapper">

        <aside class="footer-sidebar footer-sidebar-1">
            <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
        </aside>



        <?php 
        wp_nav_menu( array( 
        'theme_location' => 'secondary-menu',
        'container' => 'nav',
        'container_class'   => "footer-nav",
        'container_id'      => "footer-nav" ) );
        ?>


        <aside class="footer-sidebar footer-sidebar-2">
            <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
        </aside>


    </div>
</footer>

    <?php get_footer(); ?>
