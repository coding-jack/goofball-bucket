export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('div.image-slider').slick({
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 5000,
    });

    $('div.video-slider').slick({
      slidesToShow: 1,
    });
  },
};
