let stepChecbox = document.querySelectorAll('.step__checkbox')
let stepLabel = document.querySelectorAll('.step__label')

for( let i = 0; i < stepLabel.length; i++ ) {
    stepLabel[i].onclick = function() {
        if(this.firstElementChild.checked) {
            this.classList.add('active')
        } else {
            this.classList.remove('active')
        }
    }
}