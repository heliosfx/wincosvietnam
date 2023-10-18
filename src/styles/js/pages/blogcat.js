(function ($) {
    Ecsgroup.initLayout = function () {
        // Page
        if($('#blogcat-scroll').length > 0) {
            let navPosition = $('#blogcat-scroll').find('.active').offset().left;
            $('#blogcat-scroll').animate({scrollLeft: navPosition}, 200);
        }
    };
    Ecsgroup.initPage = function () {
        // Page
        // Default
    };
  })(jQuery);
  