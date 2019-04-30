

$(window).load(function(){ 	
  // init Isotope for News
  var $grid = $('.isotope-grid').isotope({ 
    itemSelector: '.isotope-grid-item',
    percentPosition: true, 
    masonry: {
      // use element for option
      columnWidth: '.isotope-grid-sizer'
    },
    horizontalOrder: true,
    transitionDuration: '0.2s'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  }); 
});
  
  
$(window).load(function(){   
  // init Isotope for Gallery 
  var $grid = $('.gallery-isotope-grid').isotope({ 
    itemSelector: '.gallery-isotope-grid-item',
    percentPosition: true,
    masonry: {
      // use element for option
      columnWidth: '.gallery-isotope-grid-sizer'
    }, 
    horizontalOrder: true,
    transitionDuration: '0.2s'
  });
  // layout Masonry after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });    
});


// Forum Stats make responsive
$(document).ready(function() {
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
});    