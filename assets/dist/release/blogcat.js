"use strict";

(function ($) {
  Ecsgroup.initLayout = function () {
    // Page
    if ($('#blogcat-scroll').length > 0) {
      var navPosition = $('#blogcat-scroll').find('.active').offset().left;
      $('#blogcat-scroll').animate({
        scrollLeft: navPosition
      }, 200);
    }
  };
  Ecsgroup.initPage = function () {
    // Page
    // Default
  };
})(jQuery);
//# sourceMappingURL=blogcat.js.map
