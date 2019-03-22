// Custom JS for Rare Cancer PH
$(document).ready(function() {
  $('.carousel').lightSlider({
    item: 1,
    autoWidth: false,
    auto: true,
    loop: true,
    pause: 5000,
    pauseOnHover: true,
    enableTouch: false,
    enableDrag: false,
  });

  $('#search').click(function(e) {
    e.preventDefault();
    var searchContainer = $('#search-container');
    var navItem = $(this).parent();
    searchContainer.slideToggle(300, function() {
      if (searchContainer.css('display') != 'none') {
        navItem.addClass('active');
      } else {
        $('#search-container input').val("");
        navItem.removeClass('active');
      }
    });
  });

  $('.show-menu').click(function(e) {
    if($('#search-container').css('display') != 'none') {
      $('#search-container input').val("");
      $('#search-container').css('display', 'none');
      $('#search').parent().removeClass('active');
    }
  });
});