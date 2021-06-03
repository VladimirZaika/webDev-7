// Show hide content ===================================
//======================================================
let getShowBtn = document.querySelector('.show-all')
let getParagraphMobile = document.querySelector('.paragraph__wrap.mobile')

getShowBtn.addEventListener('click', function() {
    getShowBtn.classList.add('active')
    getParagraphMobile.classList.add('active')
})