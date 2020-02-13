<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    
    <h1><?php bloginfo('title'); ?></h1>
    
    <?php 
while( have_posts() ) : the_post();
   the_title();
    the_content();
endwhile;
?>

</body>
</html>
