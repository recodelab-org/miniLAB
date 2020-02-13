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
        <article>

            <!--Dies ist der berühmte Loop-->
            <?php 
            while( have_posts() ) : the_post(); ?>


            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>


            <?php endwhile; ?>
        </article>
    </main>

    <footer>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </nav>
    </footer>

</body>

</html>
