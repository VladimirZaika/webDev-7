let stepOneBtn = document.querySelector('.button__step--one')
let stepTwoBtn = document.querySelector('.button__step--two')
let stepOneWrap = document.querySelector('.step__one--wrap')
let stepTwoWrap = document.querySelector('.step__two--wrap')
let nextStep = document.querySelectorAll('.go-to-step-2')
let stepApartmentMoving = document.getElementById('apartment-moving-step')
let stepOfficeMoving = document.getElementById('office-moving-step')
let transportationIndividual = document.getElementById('transportation-individual-items')
let assemblyTransportation = document.getElementById('assembly-transportation-furniture')
let stepKeeping = document.getElementById('keeping-step')
let stepOther = document.getElementById('other-step')
let stepApartmentBlock = document.getElementById('apartment-moving-block')
let stepOfficeBlock = document.getElementById('office-moving-block')
let transportationIndividualBlock = document.getElementById('transportation-individual-items-block')
let assemblyTransportationBlock = document.getElementById('assembly-transportation-block')
let keepingBlock = document.getElementById('keeping-block')
let otherBlock = document.getElementById('other-block')
let stepBtnSelect = stepOneWrap.querySelectorAll('.button__select')
let stepBtnSelectTarget = stepBtnSelect[0]

stepOneBtn.addEventListener('click', function() {
    stepOneBtn.classList.add('active')
    stepTwoBtn.classList.remove('active')
    stepOneWrap.classList.add('active')
    stepTwoWrap.classList.remove('active')
})

stepTwoBtn.addEventListener('click', function() {
    stepOneBtn.classList.remove('active')
    stepTwoBtn.classList.add('active')
    stepOneWrap.classList.remove('active')
    stepTwoWrap.classList.add('active')
})

for( let j = 0; j < nextStep.length; j++ ) {
    nextStep[j].onclick = function() {
        stepOneBtn.classList.remove('active')
        stepTwoBtn.classList.add('active')
        stepOneWrap.classList.remove('active')
        stepTwoWrap.classList.add('active')
    }
}

for( let i = 0; i < stepBtnSelect.length; i++ ) {
    stepBtnSelect[i].onclick = function() {
        stepBtnSelectTarget.classList.remove('active')
        this.classList.add('active')
        stepBtnSelectTarget = this
        console.log('click')
    }
}

stepApartmentMoving.onclick = function() {
    stepApartmentBlock.classList.add('active')
    stepOfficeBlock.classList.remove('active')
    transportationIndividualBlock.classList.remove('active')
    assemblyTransportationBlock.classList.remove('active')
    keepingBlock.classList.remove('active')
    otherBlock.classList.remove('active')
}

stepOfficeMoving.onclick = function() {
    stepApartmentBlock.classList.remove('active')
    stepOfficeBlock.classList.add('active')
    transportationIndividualBlock.classList.remove('active')
    assemblyTransportationBlock.classList.remove('active')
    keepingBlock.classList.remove('active')
    otherBlock.classList.remove('active')
}

transportationIndividual.onclick = function() {
    stepApartmentBlock.classList.remove('active')
    stepOfficeBlock.classList.remove('active')
    transportationIndividualBlock.classList.add('active')
    assemblyTransportationBlock.classList.remove('active')
    keepingBlock.classList.remove('active')
    otherBlock.classList.remove('active')
}

assemblyTransportation.onclick = function() {
    stepApartmentBlock.classList.remove('active')
    stepOfficeBlock.classList.remove('active')
    transportationIndividualBlock.classList.remove('active')
    assemblyTransportationBlock.classList.add('active')
    keepingBlock.classList.remove('active')
    otherBlock.classList.remove('active')
}

stepKeeping.onclick = function() {
    stepApartmentBlock.classList.remove('active')
    stepOfficeBlock.classList.remove('active')
    transportationIndividualBlock.classList.remove('active')
    assemblyTransportationBlock.classList.remove('active')
    keepingBlock.classList.add('active')
    otherBlock.classList.remove('active')
}

stepOther.onclick = function() {
    stepApartmentBlock.classList.remove('active')
    stepOfficeBlock.classList.remove('active')
    transportationIndividualBlock.classList.remove('active')
    assemblyTransportationBlock.classList.remove('active')
    keepingBlock.classList.remove('active')
    otherBlock.classList.add('active')
}