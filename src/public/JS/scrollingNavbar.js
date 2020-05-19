jQuery(document).ready(function($) {
    $(window).scroll(function() {
      var scrollPos = $(window).scrollTop(),
          navbar = $('.navbar');
        // console.log(scrollPos);
      if (scrollPos > 100) {
        navbar.addClass('alt-color');
      } else {
        navbar.removeClass('alt-color');
      }
    });
  });