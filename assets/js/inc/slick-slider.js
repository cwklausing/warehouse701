import '../vendors/slick.min';

const slickSlider = ($ => {
  var _public = {};

  _public.init = () => {
    $('.home-spaces').slick({
      arrows: false,
      cssEase: 'cubic-bezier(.12,.62,.33,.98)',
      dots: false,
      infinite: false,
      prevArrow: '<div class="slick-nav slick-nav__prev"><span></span></div>',
      nextArrow: '<div class="slick-nav slick-nav__next"><span></span></div>',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 800,
          settings: {
            dots: true,
            arrows: true
          }
        }
      ]
    });

    $('.single-space__gallery').slick({
      arrows: false,
      cssEase: 'cubic-bezier(.12,.62,.33,.98)',
      dots: false,
      infinite: false,
      prevArrow:
        '<div class="slick-nav slick-nav__prev"><div class="slick-circle"><span></span></div></div>',
      nextArrow:
        '<div class="slick-nav slick-nav__next"><div class="slick-circle"><span></span></div></div>',
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 800,
          settings: {
            arrows: true
          }
        }
      ]
    });
  };

  return _public;
})(jQuery);

export default slickSlider;
