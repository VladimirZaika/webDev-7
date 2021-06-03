let formCart = document.getElementById('form-cart')
let mainApplication = document.querySelector('.main__application')
let sectionSuccessfulPurchase = document.querySelector('.section__successful--purchase')
let cartInputTel = document.getElementById('cart-input-tel')
let cartInputName = document.getElementById('cart-input-name')
let applicationRequiredText = document.getElementById('application-required-text')

formCart.addEventListener('submit', function cartSubmit(event) {
    if(!cartInputTel.checkValidity()) {
        applicationRequiredText.style.maxHeight = applicationRequiredText.scrollHeight + 'px'
        cartInputTel.setCustomValidity(' ')
    } else {
        sectionSuccessfulPurchase.classList.remove('diactivated')
        mainApplication.classList.add('diactivated')
        event.preventDefault()
    }
})

cartInputTel.oninvalid = function() {
    applicationRequiredText.style.maxHeight = applicationRequiredText.scrollHeight + 'px'
    this.setCustomValidity(' ')
}

cartInputTel.oninput = function() {
    applicationRequiredText.style.maxHeight = '0'
    this.setCustomValidity('')
}