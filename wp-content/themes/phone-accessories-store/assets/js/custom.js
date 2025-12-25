// Scroll to Top
window.onscroll = function() {
  const phone_accessories_store_button = document.querySelector('.scroll-top-box');
  if (phone_accessories_store_button) {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      phone_accessories_store_button.style.display = "block";
    } else {
      phone_accessories_store_button.style.display = "none";
    }
  }
};

const scrollTopLink = document.querySelector('.scroll-top-box a');
if (scrollTopLink) {
  scrollTopLink.onclick = function(event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
}

jQuery(document).ready(function() {
  jQuery('.product-sec .owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 3
    },
    1000: { 
      items: 3
    },
    1200: { 
      items: 4
    }
  },
    autoplay: false,
  });
});

// slider
jQuery(document).ready(function($) {
  const options = {
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
    adaptiveHeight: true,
    autoplay: false
  };

  $('.slider').on('init', function(event, slick) {
    const slider = this;
    setTimeout(function() {
      let dots = $('.slick-dots > li > button', slider);
      $.each(dots, function(i, button) {
        let slide_id = $(button).attr('aria-controls');
        let slide = $('#' + slide_id);
        let imgEl = slide.find('.wp-block-cover__image-background');
        let dot_img = imgEl.attr('src');
        if (dot_img) {
          $(button).html('<img src="' + dot_img + '" alt="Slide Thumbnail" />');
        }
      });
    }, 100);
  }).slick(options);
});
