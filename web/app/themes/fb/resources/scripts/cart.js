$(document).ready(() => {
  if (document.body.classList.contains('cart')) {


    // actualizar carrito al cambiar cantidad

    $('.ftbsCartQuantityInput').change(function(){
      $("[name='update_cart']").trigger("click");
    });


    // aumentar y reducir cantidad con botones personalizados

    $('.product-quantity-add').each(function(){
      let id = $(this).siblings('.quantity').find('.ftbsCartQuantityInput').attr('id');
      $(this).click(function() {
        ftbsCartIncreaseProduct(id);
      }) ;
    })

    $('.product-quantity-remove').each(function(){
      let id = $(this).siblings('.quantity').find('.ftbsCartQuantityInput').attr('id');
      $(this).click(function() {
        ftbsCartDecreaseProduct(id);
      }) ;
    })

    function ftbsCartIncreaseProduct(id) {
      let curr = parseInt($('#' + id).val());
      console.log(curr);
      $('#' + id).val(++curr);
      $("[name='update_cart']").prop("disabled", false);
      $("[name='update_cart']").trigger("click");
    }

    function ftbsCartDecreaseProduct(id) {
      let curr = parseInt($('#' + id).val());
      console.log(curr);
      $('#' + id).val(--curr);
      $("[name='update_cart']").prop("disabled", false);
      $("[name='update_cart']").trigger("click");
    }
  }
});



