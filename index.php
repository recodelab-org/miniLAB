<?php get_header(); ?>

<body <?php body_class(); ?>>

    <div id="upper-wrapper" class="upper-wrapper">
        <header class="main-header">
            <div class="container">
                <?php if ( is_front_page() ) { ?>
                <h1><?php bloginfo('title'); ?></h1>
                <?php } else { ?>
                <h2><?php bloginfo('title'); ?></h2>
                <?php } 
            ?>
            <p><?php bloginfo('description'); ?></p>
            </div>
        </header>


        
            <?php 
        wp_nav_menu( array( 
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class'   => "main-nav",
        'container_id'      => "main-nav" ) );
        ?>
        

        <nav class="burger-icon" onclick="toggleMobileNav()">
            <i class="fas fa-bars"></i>
        </nav>

        <nav id="mobile-nav" class="mobile-nav" onclick="hideMobileNav()">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
        </nav>




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
