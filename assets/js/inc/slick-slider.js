import '../vendors/slick.min';

const slickSlider = ($ => {
  var _public = {};

  _public.init = () => {
    $('.home-spaces').slick({
      dots: true,
      infinite: false,
      prevArrow: '<div class="slick-nav slick-nav__prev"><span></span></div>',
      nextArrow: '<div class="slick-nav slick-nav__next"><span></span></div>'
    });
  };

  return _public;
})(jQuery);

export default slickSlider;
