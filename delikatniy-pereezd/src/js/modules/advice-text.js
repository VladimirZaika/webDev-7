// Show hide content ===================================
//======================================================
let ourAdviceBlock = document.querySelector('.our__advice')
let adviceTextPlank = document.querySelector('.advice__text--plank')
let adviceBtn = document.querySelector('.our__advice--button')
let adviceArrow = document.querySelector('.our__advice--arrow')
let textUp = document.querySelector('.go__up--text')
let textDown = document.querySelector('.go__down--text')

adviceBtn.addEventListener('click', (e) => {
    e.preventDefault()
    if (ourAdviceBlock.classList.contains('active')) {
        ourAdviceBlock.classList.remove('active');
        adviceArrow.classList.remove('active');
        textDown.classList.add('active');
        textUp.classList.remove('active');
        adviceTextPlank.classList.remove('active');
        if (document.documentElement.clientWidth < 1280) {
            ourAdviceBlock.style.maxHeight = '264px';
        } else {
            ourAdviceBlock.style.maxHeight = '360px';
        }
    } else {
        ourAdviceBlock.classList.add('active');
        adviceArrow.classList.add('active');
        textDown.classList.remove('active');
        textUp.classList.add('active');
        adviceTextPlank.classList.add('active');
        ourAdviceBlock.style.maxHeight = ourAdviceBlock.scrollHeight + 'px';
    }
});