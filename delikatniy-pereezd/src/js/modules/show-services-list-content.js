// Show/hide services list content ==============================
//===============================================================
var corporateBtn = $('.button__corporate');
var privateBtn = $('.button__private');
var corporateWrap = $('.corporate__clients');
var privateWrap = $('.private__clients');

corporateBtn.on('click', function() {
    corporateBtn.addClass('active')
    privateBtn.removeClass('active')
    corporateWrap.removeClass('diactivated')
    privateWrap.addClass('diactivated')
})

privateBtn.on('click', function() {
    corporateBtn.removeClass('active')
    privateBtn.addClass('active')
    corporateWrap.addClass('diactivated')
    privateWrap.removeClass('diactivated')
})