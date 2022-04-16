/*!
* Start Bootstrap - Landing Page v6.0.5 (https://startbootstrap.com/theme/landing-page)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

var toTop = 0;
function autoPlay(){
  timer = setTimeout(function(){
    var row = document.getElementById('row');
    toTop = toTop - 115;
    if (toTop < -260){
      toTop = 0;
      clearTimeout(timer);
      row.onmouseover = clearTimeout(timer);
      }
  row.style.top = toTop +'px';
  autoPlay();
  }, 1000);
}
autoPlay();

$('.center').slick({
  dots: false,
  infinite: true,
  speed: 300,
  centerMode: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  rows: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        infinite: true,
        rows: 1,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        slidesToScroll: 1,
        rows:1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        slidesToScroll: 1,
        rows:1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});




