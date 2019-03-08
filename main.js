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
        if (searchContainer.css('display') == 'block') {
            navItem.addClass('active');
        } else {
            $('#search-container input').val("");
            navItem.removeClass('active');
        }
    });
  });
});