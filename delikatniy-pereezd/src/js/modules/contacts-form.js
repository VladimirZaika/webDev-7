var buttonFormQuestion = $('.button__form--question')
var buttonFormReview = $('.button__form--review')
var buttonFormQcs = $('.button__form--qcs')
var contactsForm = $('.contacts__form')

buttonFormQuestion.on('click', function() {
    contactsForm.attr('action', 'question')
})

buttonFormReview.on('click', function() {
    contactsForm.attr('action', 'review')
})

buttonFormQcs.on('click', function() {
    contactsForm.attr('action', 'qcs')
})


// Request input validity ===============================
// ======================================================
let requiredText = document.getElementById('request-error-text')
let requestInput = document.getElementById('request-input')
let requestForm = document.getElementById('request-form')
let requestSuccessfulPurchase = document.querySelector('.request__successful--purchase')
let requestWrapper = document.querySelector('.qcs__request--wrap')

requestForm.addEventListener('submit', function requestSubmit(event) {
    if(!requestInput.checkValidity()) {
        requiredText.style.maxHeight = requiredText.scrollHeight + 'px'
        requestInput.setCustomValidity(' ')
    } else {
        requestSuccessfulPurchase.classList.add('active')
        requestWrapper.classList.add('diactivated')
        event.preventDefault()
    }
})

requestInput.oninvalid = function() {
    requiredText.style.maxHeight = requiredText.scrollHeight + 'px'
    this.setCustomValidity(' ')
}

requestInput.oninput = function() {
    requiredText.style.maxHeight = '0'
    this.setCustomValidity('')
}