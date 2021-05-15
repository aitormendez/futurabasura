/**
 * External Dependencies
 */
import 'jquery';
import anime from 'animejs';
import Scrambler from 'scrambling-text';
import './slider.js';
import './infiniteScroll.js';
import './shop.js';
import './select2.js';
import './singleProduct.js';
import './simpleProduct.js';
import './variableProduct.js';
import './frontPage.js';

$(document).ready(() => {

  // comportamiento del scroll
  // ---------------------------------------------------------

  let w = $(window),
      btnMenu = $("#li-btn-menu"),
      viewportWidth = w.width();

  if (viewportWidth <= 640) {
    w.scroll(function() {
      if (w.scrollTop() > 150) {
        btnMenu.addClass("fixed posY");
        btnMenu.removeClass("absolute");
      } else {
        btnMenu.addClass("absolute");
        btnMenu.removeClass("fixed posY");
      }
    });
  }

  // solapa
  // ---------------------------------------------------------

  let btnMenuJS = document.getElementById('btn-menu');
  let btnCloseJS = document.getElementById('btn-close');

  btnMenuJS.addEventListener('click', function() {
    anime({
      targets: '#solapa',
      translateX: '100vw',
      duration: 100,
      easing: 'linear',
    });
    anime({
      targets: '#solapa li',
      translateX: '52rem',
      duration: 500,
      easing: 'easeOutElastic(1, .6)',
      delay: anime.stagger(50),
    });
  })

  btnCloseJS.addEventListener('click', function() {
    anime({
      targets: '#solapa',
      translateX: 0,
      duration: 100,
      easing: 'linear',
    });

    anime({
      targets: '#solapa li',
      duration: 100,
      translateX: 0,
    });
  })

  // scramble text en brand
  // https://github.com/sogoagain/scrambling-text-js
  // ---------------------------------------------------------
  const TEXTS = fb.frases;

  const scrambler = new Scrambler();
  const handleScramble = (text) => {
    document.getElementById('brand').innerHTML = text;
  }

  let i = 0;
  function printText() {
    scrambler.scramble(TEXTS[i % TEXTS.length], handleScramble);
    setTimeout(printText, 30000);
    i++;
  }
  setTimeout(printText, 10000);

});



