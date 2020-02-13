<!DOCTYPE html>
<html>
<head>
    <title>Meine MiniLAB Seite</title>
</head>
<body>
    
    <?php 
while( have_posts() ) : the_post();
   the_title();
    the_content();
endwhile;
?>

</body>
</html>
