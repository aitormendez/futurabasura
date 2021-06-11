import Glide, {
  Controls,
  Autoplay,
  Keyboard
} from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {
  if (document.body.classList.contains('home')) {

    // ajustar alto cupones
    // ----------------------------------------------------

    let cupones = document.getElementsByClassName('cupon-wrap');

    for (const c of cupones) {
      let altoOrg = c.offsetHeight;
      let alto = Math.ceil(altoOrg / 12) * 12;
      c.style.height = alto + 'px';
    }

    // slider de contenidos (no el principal de productos)
    // ----------------------------------------------------

    let gals = document.querySelectorAll('.galeria .glide');

    for (let i = 0; i < gals.length; i++) {
      gals[i].id = 'gal' + i;

      new Glide('#gal' + i, {
        type: 'carousel',
        autoplay: 2000,
        animationDuration: 1000,
        animationTimingFunc: 'linear',
        gap: 0,
      }).mount({
        Controls,
        Autoplay,
        Keyboard
      });
    }

    // ajustar alto de contenito con formato "repetido"
    // ----------------------------------------------------

    let repetidos = $('.repeticion');

    repetidos.each(function () {

      let img = $(this).find('img').eq(0);
      let clip = $(this).find('.clip').eq(0);
      let alto = img.height();
      clip.height(alto);
    });

  }
});
