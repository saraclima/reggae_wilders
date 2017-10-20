$(document).ready(function() {
  $('#owl-carousel').owlCarousel({
    navigation: false,
    loop: true,
    autoplay: 2000,
    items: 1,
    itemsDesktop: false,
    itemsDesktopSmall: false,
    itemsTablet: false,
    itemsMobile: false,
    animateOut: 'fadeOut'
  });

  $('.scrollTo').on('click', function() {
    var page = $(this).attr('href'),
        speed = 1000;
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed);
    return false;
});
});
