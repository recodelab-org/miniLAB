<!DOCTYPE html>
<!--
miniLAB – a ridiculously simple wordPress theme.
Copyright (C) 2020 - 2021  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
-->
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

            <figure class="image my-featured-image">
                <?php echo the_post_thumbnail()?>

                <?php 
                if (my_post_thumbnail_caption()) { 
                 my_post_thumbnail_caption(); 
                }
                ?>


            </figure>

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
    <?php wp_footer() ?>
</body>

</html>
