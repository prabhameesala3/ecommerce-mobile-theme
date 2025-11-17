// jQuery version (safe for WP)
jQuery(document).ready(function($){
  const $menuBtn = $("#menu-btn, .hamburger, .menu-toggle"); // try multiple selectors
  const $menuPanel = $(".mobile-menu, .site-mobile-menu, .offcanvas-menu").first();
  const $closeBtn = $("#close-menu, .menu-close");
  const $backdrop = $("<div class='mobile-menu-backdrop'></div>").appendTo("body");

  // ensure menu is hidden on load
  $menuPanel.removeClass("open").css({"left":"-100%"});

  $menuBtn.on("click", function(e){
    e.preventDefault();
    $menuPanel.addClass("open").css({"left":"0"});
    $backdrop.addClass("open");
    $("body").addClass("menu-open"); // optional: prevent body scroll
  });

  $closeBtn.on("click", function(e){
    e.preventDefault();
    $menuPanel.removeClass("open").css({"left":"-100%"});
    $backdrop.removeClass("open");
    $("body").removeClass("menu-open");
  });

  $backdrop.on("click", function(){
    $menuPanel.removeClass("open").css({"left":"-100%"});
    $backdrop.removeClass("open");
    $("body").removeClass("menu-open");
  });

  // close with Escape
  $(document).on("keydown", function(e){
    if (e.key === "Escape" && $menuPanel.hasClass("open")){
      $menuPanel.removeClass("open").css({"left":"-100%"});
      $backdrop.removeClass("open");
      $("body").removeClass("menu-open");
    }
  });
});
