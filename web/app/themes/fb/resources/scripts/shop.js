$(document).ready(() => {
  if (document.body.classList.contains('post-type-archive-product'))  {

      var select = '.dropdown_artist';
      function onProductTaxChange() {
          if ( $(select).val() !=='' ) {
              location.href = fb.homeUrl+ '/artists/'+$(select).val();
          }
      }
      $(select).change( onProductTaxChange );

  }
});
