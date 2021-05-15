$(document).ready(() => {
  if (document.body.classList.contains('home')) {

    // ajustar alto cupones
    // ----------------------------------------------------

    let cupones = document.getElementsByClassName('cupon-wrap');
    console.log(cupones);

    for (const c of cupones) {
      console.log(c);
      altoOrg = c.offsetHeight;
      console.log(altoOrg);
      alto = Math.ceil(altoOrg / 12) * 12;
      console.log(alto);
      c.style.height = alto + 'px';
    }

  }
});
