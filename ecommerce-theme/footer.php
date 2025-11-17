</div> <!-- END #mobile-app-wrapper -->

<script>
document.addEventListener("DOMContentLoaded", function() {

    const openMenu  = document.getElementById("openMenu");
    const closeMenu = document.getElementById("closeMenu");
    const sideMenu  = document.getElementById("sideMenu");
    const overlay   = document.getElementById("drawerOverlay");

    if(openMenu){
        openMenu.addEventListener("click", () => {
            sideMenu.classList.add("open");
            overlay.classList.add("visible");
        });
    }

    if(closeMenu){
        closeMenu.addEventListener("click", () => {
            sideMenu.classList.remove("open");
            overlay.classList.remove("visible");
        });
    }

    if(overlay){
        overlay.addEventListener("click", () => {
            sideMenu.classList.remove("open");
            overlay.classList.remove("visible");
        });
    }

});
</script>

<?php wp_footer(); ?>
</body>
</html>
