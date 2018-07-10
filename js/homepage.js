$(document).ready(function() {

  $(".about").click(function() {
    $("html, body").animate({
      scrollTop: $(".intro").offset().top },
      {duration: 1000,easing: "swing"});
    return false;
  });
  $(".contact").click(function() {
    $("html, body").animate({
      scrollTop: $("footer").offset().top },
      {duration: 1000,easing: "swing"});
    return false;
  });
  // $(".projects-nav").click(function() {
  //   $("html, body").animate({
  //     scrollTop: $(".projects").offset().top },
  //     {duration: 1000,easing: "swing"});
  //   return false;
  // });
})