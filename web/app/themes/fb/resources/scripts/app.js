/**
 * External Dependencies
 */
import 'jquery';

$(document).ready(() => {

  let w = $(window),
      btnMenu = $("#btn-menu"),
      viewportWidth = w.width();

  console.log(btnMenu);
  if (viewportWidth <= 640) {
    w.scroll(function() {
      console.log(w.scrollTop());

      if (w.scrollTop() > 150) {
        btnMenu.addClass("fixed posY");
        btnMenu.removeClass("absolute");
      } else {
        btnMenu.addClass("absolute");
        btnMenu.removeClass("fixed posY");
      }
    });
  }


});
