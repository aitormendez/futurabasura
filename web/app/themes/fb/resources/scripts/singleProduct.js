import Glide, { Controls, Autoplay, Keyboard } from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {
  if (document.body.classList.contains('single-product')) {

    // galería de imágenes con Glide
    // ----------------------------------------------------
    let
    g = document.getElementById('glide'),
    s = g.getElementsByClassName('slide'),
    i= document.getElementById('indice');

    var glide = new Glide('.g-gallery', {
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



    // galería de imágenes con Glide para productos relacionados
    // ----------------------------------------------------


    $('.g-related').each(function(){
      let gid = '#' + this.id;
      console.log(gid);

      let dur = Math.floor((Math.random() * 10000) + 1000);

      new Glide(gid, {
        type: 'carousel',
        autoplay: 10,
        animationDuration: dur,
        animationTimingFunc: 'linear',
        hoverpause: true,
        perView: 5,
        breakpoints: {
          1024: {
            perView: 5,
          },
          600: {
            perView: 1,
          },
        },
      }).mount({ Controls, Autoplay, Keyboard })
    });

  }

});
