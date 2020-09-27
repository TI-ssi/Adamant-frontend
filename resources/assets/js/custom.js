// Menu toggle
$('.menu-toggle').on('click', function (e) {
  e.preventDefault();

  $(this).toggleClass('is-active');
  $('.overlay-menu').toggleClass('is-open');
});
