<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    
    <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>
    
    <nav class="burger-icon">
    <i class="fas fa-bars"></i>
    </nav>

    <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

    
    <main>


        <!--The Loop-->
        <?php while( have_posts() ) : the_post(); ?>

        <article>

            <section class="image my-featured-image">
                <?php echo the_post_thumbnail()?>
            </section>

            <section class="content my-article-content">
                <h3><a href="<?php echo esc_url( get_permalink() ); ?>" class="link"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
            </section>

        </article>

        <?php endwhile; ?>
        <!--Loop ends-->


    </main>

    <footer>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </nav>
    </footer>

</body>

</html>
