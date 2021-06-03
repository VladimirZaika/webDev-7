var apartmentBtn = $('.button__apartment')
var officeBtn = $('.button__office')
var apartmentWrapper = $('.apartment__wrapper')
var officeWrapper = $('.office__wrapper')
var allCasesWrapper = $('.cases__parent--wrapper')


$(window).on('load', function() {
    allCasesWrapper.css('height', apartmentWrapper.height())
})

apartmentBtn.on('click', function() {
    apartmentWrapper.addClass('active')
    apartmentBtn.addClass('active')
    officeBtn.removeClass('active')
    officeWrapper.removeClass('active')
    allCasesWrapper.css('height', apartmentWrapper.height())
})

officeBtn.on('click', function() {
    apartmentWrapper.removeClass('active')
    apartmentBtn.removeClass('active')
    officeBtn.addClass('active')
    officeWrapper.addClass('active')
    allCasesWrapper.css('height', officeWrapper.height())
})