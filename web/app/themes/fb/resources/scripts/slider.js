import Glide, { Controls, Autoplay, Keyboard } from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {

  let viewportWidth = $(window).width(),
      fondo = document.getElementById('fondo-slider'),
      slides = document.querySelectorAll('.glide__slide');
      console.log(slides);

  if (viewportWidth >= 0) {
    var glide = new Glide('.glide', {
      type: 'carousel',
      autoplay: false,
      animationDuration: 1000,
      animationTimingFunc: 'linear',
      gap: 0,
    })

    function setBg() {
      let formato = slides[glide.index].getAttribute('formato');

      console.log(glide.index);
      console.log(formato);

      if ( formato == '50x70v') {
        fondo.style.backgroundImage = `url(${fb.fondos.f50x70v})`;
      }

      if ( formato == '50x70h') {
        fondo.style.backgroundImage = `url(${fb.fondos.f50x70h})`;
      }

      if ( formato == '61x91v') {
        fondo.style.backgroundImage = `url(${fb.fondos.f61x91v})`;
      }

      if ( formato == '61x91h') {
        fondo.style.backgroundImage = `url(${fb.fondos.f61x91h})`;
      }
    }

    glide.on('build.after', function() {
      setBg();
    })

    glide.on('run', function() {
      setBg();
    })

    glide.mount({ Controls, Autoplay, Keyboard });
    $(window).trigger('resize', {});
  }

});
