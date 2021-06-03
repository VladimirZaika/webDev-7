let main = document.querySelector('.main__cart')
let cart = document.querySelector('.cart__mobile--wrap')
let cartBtnClose = document.querySelectorAll('.go-to-checkout')
let editCart = document.querySelectorAll('.edit-cart')

function delay(f, ms) {

    return function() {
      setTimeout(() => f.apply(this, arguments), ms);
    };
  
  }
  
function hideCartContent() {
    cart.setAttribute('style', 'display: block;')
    main.setAttribute('style', 'display: none;')
}

function CartClose() {
    cart.setAttribute('style', 'display: none;')
    main.removeAttribute('style')
}

document.addEventListener('DOMContentLoaded', function(){
    cart.setAttribute('style', 'display: none;')
})

document.addEventListener('resize', function(){
    if(document.documentElement.clientWidth > 1279) {
        cart.style.display = 'none'
    }
})

for ( let i = 0; i < editCart.length; i++ ) {
    editCart[i].onclick = delay(hideCartContent, 200)
}

for ( let j = 0; j < cartBtnClose.length; j++ ) {
    cartBtnClose[j].onclick = delay(CartClose, 200)
}

$(document).on('keydown', function(e) {
    if (e.keyCode == 27) {
        cart.setAttribute('style', 'display: none;')
        main.removeAttribute('style')
    }
});