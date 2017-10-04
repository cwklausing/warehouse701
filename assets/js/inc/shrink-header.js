const ShrinkHeader = ($ => {
  const $header = $(".site-header");
  function checkOffset() {
    var $scrollDistance = $(window).scrollTop();
    if ($scrollDistance > 40) {
      $header.addClass("header-shrink");
    } else {
      $header.removeClass("header-shrink");
    }
  }

  var _public = {};

  _public.init = () => {
    $(document).on("scroll", checkOffset);
  };

  return _public;
})(jQuery);

export default ShrinkHeader;
