import Glide, { Controls, Autoplay, Keyboard } from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {

  let viewportWidth = $(window).width();
  if (viewportWidth >= 640) {
    var glide = new Glide('.glide', {
      type: 'carousel',
      autoplay: 5000,
      gap: 0,
    })
    glide.mount({ Controls, Autoplay, Keyboard });
    $(window).trigger('resize', {})
  }

});
