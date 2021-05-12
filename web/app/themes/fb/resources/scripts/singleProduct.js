import Glide, { Controls, Autoplay, Keyboard } from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {
  if (document.body.classList.contains('single-product')) {

    // galería de imágenes con Glide
    // ----------------------------------------------------
    let
    g = document.getElementById('glide'),
    s = g.getElementsByClassName('glide__slide'),
    i= document.getElementById('indice');
    console.log(s.length);

    var glide = new Glide('.glide', {
      type: 'carousel',
      autoplay: false,
      animationDuration: 0,
      animationTimingFunc: 'linear',
      gap: 0,
    })

    glide.on('run', function() {
      indice();
    })

    glide.on('mount.before', function() {
      indice();
    })

    glide.mount({ Controls, Autoplay, Keyboard });

    function indice() {
      i.innerHTML = (glide.index + 1) + ' / ' + (s.length - 2);
    }

    function avanza() {
      glide.go('>')
    }

    g.addEventListener('click', avanza);

  }
});
