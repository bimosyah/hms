
$(document).ready(function(){
  $(".preloader").fadeOut(500, function() {
    $( ".preloader" ).remove();
  });
  $("#testimonial-slider").owlCarousel({
    items:3,
    itemsDesktop:[1000,3],
    itemsDesktopSmall:[980,2],
    itemsTablet:[768,2],
    itemsMobile:[650,1],
    pagination:true,
    navigation:false,
    slideSpeed:1000,
    autoPlay:true
  });
  $("#image-slider").owlCarousel({
    items:3,
    itemsDesktop:[1000,3],
    itemsDesktopSmall:[980,2],
    itemsTablet:[768,2],
    itemsMobile:[650,1],
    pagination:true,
    navigation:false,
    slideSpeed:1000,
    autoPlay:true
  });
});
// $(function () {
//   $('[data-toggle="tooltip"]').tooltip()
// })

function Enlarge(Path) {
  document["Target"].src = Path.src;
};
