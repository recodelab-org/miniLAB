<?php get_header(); ?>

<body <?php body_class(); ?>>

    <div id="upper-wrapper" class="upper-wrapper">
        <header class="main-header">
            <div class="ehy-header-content-wrapper">
                <?php if ( is_front_page() ) { ?>
                <h1><?php bloginfo('title'); ?></h1>
                <?php } else { ?>
                <h2><?php bloginfo('title'); ?></h2>
                <?php } 
            ?>
            </div>
        </header>


        <nav id="main-nav" class="main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>

        <nav class="burger-icon" onclick="toggleMobileNav()">
            <i class="fas fa-bars"></i>
        </nav>

        <nav id="mobile-nav" class="mobile-nav" onclick="hideMobileNav()">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
        </nav>

        <div id="main-wrapper" class="main-wrapper">
            <main>


                <!--The Loop-->
                <?php while( have_posts() ) : the_post(); ?>

                <?php if ( is_singular() ) { ?>
                <article>
                    <section class="content ehy-article-content">
                        <?php the_content(); ?>
                    </section>
                </article>
                <?php } else { ?>
                <div class="ehy-post-page-wrapper">
                    <article>

                        <figure class="image my-featured-image">
                            <?php echo the_post_thumbnail()?>

                            <?php 
                if (my_post_thumbnail_caption()) { 
                 my_post_thumbnail_caption(); 
                }
                ?>


                        </figure>

                        <section class="content ehy-article-content">
                            <h3><a href="<?php echo esc_url( get_permalink() ); ?>" class="link"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                        </section>

                    </article>
                </div>
                <?php } 
        ?>

                <?php endwhile; ?>
                <!--Loop ends-->


            </main>
        </div>
        <!--#main wrapper -->
    </div>
    <!--#upper wrapper -->

    <?php get_footer(); ?>
