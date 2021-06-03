import './modules/accordion-open'
import './modules/custom-checkbox'
import './modules/customselect-2'
import './modules/tel-mask'
import './modules/nicescroll'
import './modules/download-input'
import './modules/show-application-content'
import './modules/cart-form-submit'

$(function() {  
    $(".select-items.select-items-checkout").niceScroll({
        cursorcolor: "#dadada",
        cursorwidth: "8px",
        cursorborder: "1px solid #dadada",
        railpadding: { top: 0, right: 4, left: 4, bottom: 0 }
    });
});
