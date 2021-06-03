import './modules/product-counter'
import './modules/nicescroll'
import './modules/customselect-2'
import './modules/tel-mask'
import './modules/checkout-form-pickup'
import './modules/cart-mobile'
import './modules/cart-form-submit'

$(function() {  
    $(".select-items.select-items-checkout").niceScroll({
        cursorcolor: "#dadada",
        cursorwidth: "8px",
        cursorborder: "1px solid #dadada",
        railpadding: { top: 0, right: 4, left: 4, bottom: 0 }
    });
});