// Product counter =============================
//==============================================
$(document).ready(function() {
    $('.num-in span').click(function () {
        var $input = $(this).parents('.num-block').find('input.in-num');
        var price = 900;
      if($(this).hasClass('minus')) {
        var count = parseFloat($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $(this).parents('.num-block').siblings('.cart__product--text ').find('.product-price').text(price * count);
        $input.val(count);
      }
      else {
        var count = parseFloat($input.val()) + 1
        $input.val(count);
        if (count > 1) {
          $(this).parents('.num-block').siblings('.cart__product--text').find('.product-price').text(price * count);
        }
      }
      
      $input.change();
      return false;
    });
    
  });
  
  let productBtn = document.querySelectorAll('.button__product')
  let numBlock = document.getElementsByClassName('num-block')
  
  for( let j = 0; j < productBtn.length; j++ ) {
    productBtn[j].onclick = function() {
      this.classList.add('diactivated')
      this.lastElementChild.classList.remove('diactivated')
    }
  }