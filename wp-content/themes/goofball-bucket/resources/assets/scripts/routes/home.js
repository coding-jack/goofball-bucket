export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    $('div.image-slider').slick({
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 4000,
    });

    $('div.video-slider').slick({
      slidesToShow: 1,
    });
  },
};
