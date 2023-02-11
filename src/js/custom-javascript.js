// Add your JS customizations here
var swiper = new Swiper(".specialise-logos", {
    slidesPerView: 4,
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 30,
      },

      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },

      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });