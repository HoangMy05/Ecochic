(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".grocery-and-organic-store-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".grocery-and-organic-store-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".grocery-and-organic-store-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".grocery-and-organic-store-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".grocery-and-organic-store-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".grocery-and-organic-store-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".grocery-and-organic-store-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".grocery-and-organic-store-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".grocery-and-organic-store-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".grocery-and-organic-store-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".grocery-and-organic-store-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".grocery-and-organic-store-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".grocery-and-organic-store-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".grocery-and-organic-store-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".grocery-and-organic-store-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".grocery-and-organic-store-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".grocery-and-organic-store-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".grocery-and-organic-store-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".grocery-and-organic-store-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".grocery-and-organic-store-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".grocery-and-organic-store-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".grocery-and-organic-store-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".grocery-and-organic-store-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".grocery-and-organic-store-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".grocery-and-organic-store-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".grocery-and-organic-store-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".grocery-and-organic-store-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".grocery-and-organic-store-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".grocery-and-organic-store-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".grocery-and-organic-store-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".grocery-and-organic-store-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".grocery-and-organic-store-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".grocery-and-organic-store-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".grocery-and-organic-store-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".grocery-and-organic-store-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".grocery-and-organic-store-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".grocery-and-organic-store-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".grocery-and-organic-store-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".grocery-and-organic-store-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".grocery-and-organic-store-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".grocery-and-organic-store-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".grocery-and-organic-store-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".grocery-and-organic-store-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".grocery-and-organic-store-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".grocery-and-organic-store-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var groceryStickyMenu = $(".grocery_and_organic_store_sticky-menu");
    var groceryStickyMenu = $(".grocery-and-organic-store-sticky-navigation");

    if (groceryStickyMenu.length && scrollTop > 0) {
      groceryStickyMenu.addClass("sticky-menu-enabled grocery-and-organic-store-zoom-in-up");
    } else {
      groceryStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".grocery-and-organic-store-scrollto-top a").fadeIn();
    } else {
      jQuery(".grocery-and-organic-store-scrollto-top a").fadeOut();
    }
  });
  jQuery(".grocery-and-organic-store-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);
