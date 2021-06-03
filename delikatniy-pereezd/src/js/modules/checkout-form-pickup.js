let radioPickUp = document.getElementById('checkout-radio-second')
let pickUpContent = document.getElementById('pickup-active')
let radioDeliver = document.getElementById('checkout-radio-first')

radioPickUp.addEventListener('change', function() {
    if(this.checked) {
        pickUpContent.style.maxHeight = '0px';
        pickUpContent.style.overflow = 'hidden'
    } 
})

radioDeliver.addEventListener('change', function() {
    if(this.checked) {
        pickUpContent.style.maxHeight = pickUpContent.scrollHeight + 'px';
        pickUpContent.style.overflow = 'unset'
    }
})