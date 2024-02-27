// const nav = document.getElementsByClassName("nav");
// window.onscroll = function () { 
//     if (document.body.scrollTop ) {
//         nav.classList.add("scrolled");
//         // nav.classList.remove("nav");
//     } 
//     else {
//         // nav.classList.add("nav");
//         nav.classList.remove("scrolled"); 
//     }
// };
$(function () {
    $(document).scroll(function () {
      var $nav = $(".nav");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });