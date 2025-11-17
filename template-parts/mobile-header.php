<div class="mobile-header">
    <div class="header-left">
        <span class="hamburger" id="openMenu">☰</span>
    </div>

    <div class="header-center">
        <span class="brand">SONY.CO</span>
    </div>

    <div class="header-right">
        <a href="<?php echo wc_get_cart_url(); ?>">🛒</a>
    </div>
</div>

<div class="drawer-overlay" id="drawerOverlay"></div>

<div class="side-menu" id="sideMenu">
    <ul class="menu-links">
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url('/shop'); ?>">Shop</a></li>
        <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
        <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
        <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
    </ul>
</div>

<script>
document.getElementById("openMenu").onclick = function(){
    document.getElementById("sideMenu").classList.add("open");
    document.getElementById("drawerOverlay").classList.add("visible");
};
document.getElementById("drawerOverlay").onclick = function(){
    document.getElementById("sideMenu").classList.remove("open");
    this.classList.remove("visible");
};
</script>
