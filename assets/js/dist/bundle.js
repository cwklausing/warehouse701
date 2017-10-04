(function () {
  'use strict';

  var MobileMenu = function ($) {
    var $menu_button = $(".mobile-menu-button");

    var toggle_menu = function toggle_menu() {
      $("body").toggleClass("mobile-menu-open");
    };

    var _public = {};

    _public.init = function () {
      $menu_button.on("click", toggle_menu);
    };

    return _public;
  }(jQuery);

  var ShrinkHeader = function ($) {
    var $header = $(".site-header");
    function checkOffset() {
      var $scrollDistance = $(window).scrollTop();
      if ($scrollDistance > 40) {
        $header.addClass("header-shrink");
      } else {
        $header.removeClass("header-shrink");
      }
    }

    var _public = {};

    _public.init = function () {
      $(document).on("scroll", checkOffset);
    };

    return _public;
  }(jQuery);

  MobileMenu.init();
  ShrinkHeader.init();

}());
