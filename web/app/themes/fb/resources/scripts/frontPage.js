$(document).ready(() => {
  if (document.body.classList.contains('home')) {

    // ajustar alto cupones
    // ----------------------------------------------------

    let cupones = document.getElementsByClassName('cupon-wrap');
    console.log(cupones);

    for (const c of cupones) {
      altoOrg = c.offsetHeight;
      alto = Math.ceil(altoOrg / 12) * 12;
      c.style.height = alto + 'px';
    }

  }
});
