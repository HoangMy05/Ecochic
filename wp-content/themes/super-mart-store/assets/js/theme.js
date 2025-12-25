jQuery(document).ready(function() {
    var owl = jQuery('#slider .owl-carousel');
    owl.owlCarousel({
    margin: 0,
    nav:true,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: false,
    dots: false,
    navText : ['<span class="dashicons dashicons-arrow-left-alt2"></span>','<span class="dashicons dashicons-arrow-right-alt2"></span>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      1000: {
        items: 1
      },
      1200: {
        items: 1
      }
    },
    autoplayHoverPause : false,
    mouseDrag: true,
  });
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
      document.querySelectorAll(".owl-nav").forEach(function (owlNav) {
          var newDiv = document.createElement("div");
          newDiv.className = "custom-div";
          owlNav.parentNode.insertBefore(newDiv, owlNav);
      });
  }, 500); // delay in ms (adjust if needed)
});