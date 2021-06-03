// Request input validity ===============================
// ======================================================
let requiredText = document.getElementById('request-error-text')
let requestInput = document.getElementById('request-input')
let requestForm = document.getElementById('request-form')
let requestSuccessfulPurchase = document.querySelector('.request__successful--purchase')
let requestWrapper = document.querySelector('.request__wrapper')

requestForm.addEventListener('submit', function requestSubmit(event) {
    if(!requestInput.checkValidity()) {
        requiredText.style.maxHeight = requiredText.scrollHeight + 'px'
        requestInput.setCustomValidity(' ')
    } else {
        requestSuccessfulPurchase.classList.add('active')
        requestWrapper.classList.remove('active')
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