<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

    <h1><?php bloginfo('title'); ?></h1>

    <main>


        <!--The Loop-->
        <?php while( have_posts() ) : the_post(); ?>

        <article>

            <span class="image my-featured-image">
                <?php echo the_post_thumbnail()?>
            </span>

            <header class="major">
                <h3><a href="<?php echo esc_url( get_permalink() ); ?>" class="link"><?php the_title(); ?></a></h3>
                <!--<p><?php the_excerpt(); ?></p>-->
                <?php the_content(); ?>
            </header>

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
