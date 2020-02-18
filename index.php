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


    <nav id="main-nav" class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
    
            <nav class="burger-icon" onclick="toggleMobileNav()">
            <i class="fas fa-bars"></i>
        </nav>

    <nav id="mobile-nav" class="mobile-nav" onclick="hideMobileNav()">

        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>

    <main>


        <!--The Loop-->
        <?php while( have_posts() ) : the_post(); ?>

        <article>

            <section class="image my-featured-image">
                <?php echo the_post_thumbnail()?>

                <?php 
                if (my_post_thumbnail_caption()) { 
                 my_post_thumbnail_caption(); 
                }
                ?>


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

    <script>
        var x = document.getElementById("mobile-nav");
        x.style.display = "none";
        
        function toggleMobileNav() {
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hideMobileNav() {
            x.style.display = "none";
        }

    </script>

</body>

</html>
