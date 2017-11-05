var HomeSpaces = ($ => {
  var $spaceImage = $('.home-space__overlay');

  function spaceHover(event) {
    var $homeSpace = $(this).closest('.home-space');
    $homeSpace.toggleClass('hover');
  }

  var _public = {};

  _public.init = () => {
    $spaceImage.on('hover', spaceHover);
  };

  return _public;
})(jQuery);

export default HomeSpaces;
