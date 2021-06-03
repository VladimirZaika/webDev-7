// Request input validity ===============================
// ======================================================
let requestForm = document.getElementById('request-form')
let requestSuccessfulPurchase = document.querySelector('.request__successful--purchase')
let requestWrapper = document.querySelector('.qcs__request--wrap')

requestForm.addEventListener('submit', function(event) {
    requestSuccessfulPurchase.classList.add('active')
    requestWrapper.classList.add('diactivated')
    event.preventDefault()
})