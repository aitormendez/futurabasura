import Glide, { Controls, Autoplay, Keyboard } from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {
  if (document.body.classList.contains('single-product')) {


    var glide = new Glide('.glide', {
      type: 'carousel',
      autoplay: false,
      animationDuration: 0,
      animationTimingFunc: 'linear',
      gap: 0,
    })

    glide.mount({ Controls, Autoplay, Keyboard });
    console.log('lkjklj');

  }
});
