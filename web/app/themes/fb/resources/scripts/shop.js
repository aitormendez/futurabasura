$(document).ready(() => {
  if (document.body.classList.contains('post-type-archive-product') || document.body.classList.contains('tax-artist'))  {

      var select = '.dropdown_artist';
      function onProductTaxChange() {
          if ( $(select).val() !=='' ) {
              location.href = fb.homeUrl+ '/artists/'+$(select).val();
          }
          console.log($(select).val());
          console.log(select);
      }
      $(select).change( onProductTaxChange );

  }
});
