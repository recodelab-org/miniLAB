

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
