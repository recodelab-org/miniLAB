<footer id="main-footer" class="main-footer">
    <div class="ehy-footer-content-wrapper">

        <aside class="footer-sidebar footer-sidebar-1">
            <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
        </aside>
        
        <nav class="footer-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
        </nav>

        <aside class="footer-sidebar footer-sidebar-2">
            <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
        </aside>


    </div>
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
