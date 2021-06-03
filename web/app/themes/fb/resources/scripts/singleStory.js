import lightGallery from 'lightgallery';
import lgFullscreen from 'lightgallery/plugins/fullscreen';
import lgZoom from 'lightgallery/plugins/zoom';






$(document).ready(() => {
  if (document.body.classList.contains('single-story')) {

    let galerias = document.getElementsByClassName('lightbox');

    for (const gal of galerias) {
      console.log(gal);

      lightGallery(gal), {
        selector: 'a',
      }
    }


  }
});
