let selectTitle = document.querySelector('.select-selected')
let selectBtn = document.querySelectorAll('.button__select')
let selectItems = document.querySelector('.select-items')
let lastClicked = selectBtn[0];

selectTitle.addEventListener('click', function() {
  selectTitle.classList.toggle('select-arrow-active')
  selectItems.classList.toggle('select-hide')
})
 
for( let i = 0; i < selectBtn.length; i++ ) {
  selectBtn[i].onclick = function() {
    selectTitle.textContent = this.innerText
    lastClicked.classList.remove('same-as-selected');
    this.classList.add('same-as-selected');
    lastClicked = this; 
    selectTitle.classList.remove('select-arrow-active')
    selectItems.classList.add('select-hide')
  }
}

$(document).on('keydown', function(e) {
  if (e.keyCode == 27) {
    $('.select-selected').removeClass('select-arrow-active')
    $('.select-items').addClass('select-hide')
  }
});

$(document).mouseup(function (e) {
  var containerSelect = $(".select-items");
  if (containerSelect.has(e.target).length === 0){
      $('.select-selected').removeClass('select-arrow-active')
      $('.select-items').addClass('select-hide')
  }
});