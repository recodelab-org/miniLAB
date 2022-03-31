<?php
/*
Template Name: miniLAB Canvas
Template Post Type: post, page
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>
   
    <div id="upper-wrapper" class="upper-wrapper">
    



            <!--The Loop-->
            <?php while( have_posts() ) : the_post(); ?>


            
                    <?php the_content(); ?>
          


            <?php endwhile; ?>
            <!--Loop ends-->



        </div>
    <!--#upper wrapper -->

    <?php get_footer(); ?>
