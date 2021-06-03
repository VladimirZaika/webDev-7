// Show/hide packing shop content ==============================
//==============================================================
var cartonBoxesBtn = $('.button__carton-boxes');
var airBubbleBtn = $('.button__air-bubble-wrap');
var movingKitsBtn = $('.button__moving-kits');
var ductTapeBtn = $('.button__duct-tape');
var relatedProductsBtn = $('.button__related-products');
var stretchFilmsBtn = $('.button__stretch-film');
var allProductsBtn = $('.all-products');
var airBubbleWrap = $('.air-bubble-wrap');
var CartonBoxesWrap = $('.carton-boxes');
var movingKitsWrap = $('.moving-kits');
var ductTapeWrap = $('.duct-tape');
var relatedProductsWrap = $('.related-products');
var stretchFilmWrap = $('.stretch-film');

allProductsBtn.on('click', function() {
    CartonBoxesWrap.removeClass('diactivated')
    airBubbleWrap.removeClass('diactivated')
    movingKitsWrap.removeClass('diactivated')
    ductTapeWrap.removeClass('diactivated')
    relatedProductsWrap.removeClass('diactivated')
    stretchFilmWrap.removeClass('diactivated')
})

cartonBoxesBtn.on('click', function() {
    CartonBoxesWrap.removeClass('diactivated')
    airBubbleWrap.addClass('diactivated')
    movingKitsWrap.addClass('diactivated')
    ductTapeWrap.addClass('diactivated')
    relatedProductsWrap.addClass('diactivated')
    stretchFilmWrap.addClass('diactivated')
})

airBubbleBtn.on('click', function() {
    CartonBoxesWrap.addClass('diactivated')
    airBubbleWrap.removeClass('diactivated')
    movingKitsWrap.addClass('diactivated')
    ductTapeWrap.addClass('diactivated')
    relatedProductsWrap.addClass('diactivated')
    stretchFilmWrap.addClass('diactivated')
})

movingKitsBtn.on('click', function() {
    CartonBoxesWrap.addClass('diactivated')
    airBubbleWrap.addClass('diactivated')
    movingKitsWrap.removeClass('diactivated')
    ductTapeWrap.addClass('diactivated')
    relatedProductsWrap.addClass('diactivated')
    stretchFilmWrap.addClass('diactivated')
})

ductTapeBtn.on('click', function() {
    CartonBoxesWrap.addClass('diactivated')
    airBubbleWrap.addClass('diactivated')
    movingKitsWrap.addClass('diactivated')
    ductTapeWrap.removeClass('diactivated')
    relatedProductsWrap.addClass('diactivated')
    stretchFilmWrap.addClass('diactivated')
})

relatedProductsBtn.on('click', function() {
    CartonBoxesWrap.addClass('diactivated')
    airBubbleWrap.addClass('diactivated')
    movingKitsWrap.addClass('diactivated')
    ductTapeWrap.addClass('diactivated')
    relatedProductsWrap.removeClass('diactivated')
    stretchFilmWrap.addClass('diactivated')
})

stretchFilmsBtn.on('click', function() {
    CartonBoxesWrap.addClass('diactivated')
    airBubbleWrap.addClass('diactivated')
    movingKitsWrap.addClass('diactivated')
    ductTapeWrap.addClass('diactivated')
    relatedProductsWrap.addClass('diactivated')
    stretchFilmWrap.removeClass('diactivated')
})

let productBtnDesktop = document.querySelectorAll('.button__select.desktop');
let lastClickedBtnDesktop = productBtnDesktop[0];

for( let z = 0; z < productBtnDesktop.length; z++ ) {
    productBtnDesktop[z].onclick = function() {
        lastClickedBtnDesktop.classList.remove('active');
      this.classList.add('active');
      lastClickedBtnDesktop = this; 
    }
}