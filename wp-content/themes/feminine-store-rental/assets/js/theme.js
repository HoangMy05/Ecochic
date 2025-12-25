jQuery(document).ready(function() {
    var owl = jQuery('#slider .owl-carousel');
    owl.owlCarousel({
    margin: 0,
    nav:true,
    stagePadding: 300,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: true,
    center:true,
    dots: false,
    navText : ['<span class="dashicons dashicons-arrow-left-alt"></span>','<span class="dashicons dashicons-arrow-right-alt"></span>'],
    responsive: {
      0: {
        stagePadding: 0,
        items: 1
      },
      576: {
        stagePadding: 0,
        items: 1
      },
      768: {
        stagePadding: 100,
        items: 1
      },
      1000: {
        stagePadding: 150,
        items: 1
      },
      1200: {
        items: 1
      }
    },
    autoplayHoverPause: false,
    mouseDrag: true,
    animateOut: 'slideOutLeft',
    animateIn: 'slideInRight', 
    smartSpeed: 900   
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter-main h5");
  const speed = 200; // lower = faster

  // Convert text like "15K+" → 15000
  const parseValue = (text) => {
    let clean = text.replace(/[^\d]/g, ""); // extract digits
    let num = parseInt(clean, 10) || 0;

    if (/k/i.test(text)) {
      num *= 1000;
    } else if (/m/i.test(text)) {
      num *= 1000000;
    }
    return num;
  };

  const getSuffix = (text) => {
    return text.replace(/[0-9]/g, "").toUpperCase(); // keep non-numeric chars
  };

  const animateCounter = (counter, finalText) => {
    const target = parseValue(finalText);
    const suffix = getSuffix(finalText);

    const updateCount = () => {
      const current = parseInt(counter.innerText.replace(/[^\d]/g, "")) || 0;
      const increment = Math.ceil(target / speed);

      if (current < target) {
        counter.innerText = current + increment + suffix;
        setTimeout(updateCount, 30);
      } else {
        counter.innerText = finalText; // show exact final value
      }
    };

    updateCount();
  };

  const options = { threshold: 0.5 };
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const finalText = entry.target.innerText.trim();
        entry.target.innerText = "0"; // start from 0
        animateCounter(entry.target, finalText);
        observer.unobserve(entry.target);
      }
    });
  }, options);

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
