import Glide, { Controls, Autoplay, Keyboard } from '@glidejs/glide/dist/glide.modular.esm';

$(document).ready(() => {
  if (document.body.classList.contains('simple')) {

    // Cantidad de productos a añadir al carro
    // ----------------------------------------------------

    let
      btnAdd = $('#ftbs_variationsTableRowColumn_quantityInput_add'),
      btnRemove = $('#ftbs_variationsTableRowColumn_quantityInput_remove');
      console.log(btnAdd);

    function ftbs_product_quantity_increase(){
      var input = $(".ftbs_variationsTableRowColumn_quantityInput:not(.ftbs_variationsTableRowColumn_quantityInput_inactive)").val();
      $(".ftbs_variationsTableRowColumn_quantityInput:not(.ftbs_variationsTableRowColumn_quantityInput_inactive)").val(++input)
      $('input[name="quantity"]').val(input)
    }

    function ftbs_product_quantity_decrease(){
      var input = $(".ftbs_variationsTableRowColumn_quantityInput:not(.ftbs_variationsTableRowColumn_quantityInput_inactive)").val();
      $(".ftbs_variationsTableRowColumn_quantityInput:not(.ftbs_variationsTableRowColumn_quantityInput_inactive)").val(((--input)>0)?input:1);
      $('input[name="quantity"]').val(((input)>0)?input:1);
    }

    btnAdd.click(function(){
      ftbs_product_quantity_increase();
    });

    btnRemove.click(function(){
      ftbs_product_quantity_decrease();
    });

  }
});
