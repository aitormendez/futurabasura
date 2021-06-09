import lightGallery from 'lightgallery';
import lgFullscreen from 'lightgallery/plugins/fullscreen';
import lgZoom from 'lightgallery/plugins/zoom';


$(document).ready(() => {
  if (document.body.classList.contains('single-story') || document.body.classList.contains('single-project'))  {

    let galerias = document.getElementsByClassName('lightbox');

    for (let i = 0; i < galerias.length; i++) {
      galerias[i].id = 'gal' + i;
      lightGallery(document.getElementById('gal' + i), {
        plugins: [lgFullscreen, lgZoom],
        selector: 'a',
      });
    }

  }
});
