// Custom JS for Rare Cancer PH
jQuery(function() {
  jQuery('.carousel').lightSlider({
    item: 1,
    autoWidth: false,
    auto: true,
    loop: true,
    pause: 5000,
    pauseOnHover: true,
    enableTouch: false,
    enableDrag: false,
  });

  jQuery('#search').click(function(e) {
    e.preventDefault();
    var searchContainer = jQuery('.search-container');
    var navItem = jQuery(this).parent();
    searchContainer.slideToggle(300, function() {
      if (searchContainer.css('display') != 'none') {
        navItem.addClass('active');
      } else {
        jQuery('.search-container input').val("");
        navItem.removeClass('active');
      }
    });
  });

  jQuery('.show-menu').click(function(e) {
    if(jQuery('.search-container').css('display') != 'none') {
      jQuery('.search-container input').val("");
      jQuery('.search-container').css('display', 'none');
      jQuery('#search').parent().removeClass('active');
    }
  });
});