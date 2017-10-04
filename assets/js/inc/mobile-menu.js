var MobileMenu = ($ => {
  var $menu_button = $(".mobile-menu-button");

  var toggle_menu = () => {
    $("body").toggleClass("mobile-menu-open");
  };

  var _public = {};

  _public.init = () => {
    $menu_button.on("click", toggle_menu);
  };

  return _public;
})(jQuery);

export default MobileMenu;
