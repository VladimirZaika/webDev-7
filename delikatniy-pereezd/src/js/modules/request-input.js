// Request dropdown ==============================
//================================================
var requestBtn = $('.dropdown__button')
var requestBody = $('.request__dropdown-body')
var requestDropdown = $('.request__dropdown')
var requestBodyWrap = $('.request__body--wrap')
var requestTitle = $('.request__title')
var requestArrow = $('.request__arrow')
var dayWrapper = $('.day-wrapper')
var hourWrapper = $('.hour-wrapper')
var minuteWrapper = $('.minute-wrapper')
var bodyRequest = $('.request__dropdown-body')
var inputHiddenRequest = $('#input-hidden-request')
var dayText
var hourText
var minuteText
var titleContent

function showDropdownTime() {
  dayText = dayWrapper.find('.day-active-slide').text()
  hourText = hourWrapper.find('.hour-active-slide').text()
  minuteText = minuteWrapper.find('.minute-active-slide').text()
  titleContent = dayText + ' ' + 'в' + ' ' + hourText + ':' + minuteText
  requestTitle.html(titleContent)
  inputHiddenRequest.val(titleContent)
}

bodyRequest.on('click', showDropdownTime)

requestBtn.on('click', function() {
    $(this).parent().toggleClass('active')
})

$(document).on('keydown', function(e) {
  if (e.keyCode == 27) {
    requestDropdown.removeClass('active')
  }
});

$(document).mouseup(function (e) {
  var container = $(".request__dropdown");
  if (container.has(e.target).length === 0) {
    requestDropdown.removeClass('active')
  }
});

document.addEventListener('DOMContentLoaded', () => {
  for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
      const pattern = el.getAttribute("placeholder"),
          slots = new Set(el.dataset.slots || "_"),
          prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
          first = [...pattern].findIndex(c => slots.has(c)),
          accept = new RegExp(el.dataset.accept || "\\d", "g"),
          clean = input => {
              input = input.match(accept) || [];
              return Array.from(pattern, c =>
                  input[0] === c || slots.has(c) ? input.shift() || c : c
              );
          },
          format = () => {
              const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
                  i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
                  return i<0? prev[prev.length-1]: back? prev[i-1] || first: i;
              });
              el.value = clean(el.value).join``;
              el.setSelectionRange(i, j);
              back = false;
          };
      let back = false;
      el.addEventListener("keydown", (e) => back = e.key === "Backspace");
      el.addEventListener("input", format);
      el.addEventListener("focus", format);
      el.addEventListener("blur", () => el.value === pattern && (el.value=""));
  }
});

$('.request__input').on("focus", function(){
    $(this).siblings('.mask').eq(0).addClass('active')
});
$('.request__input').on("blur", function(){
    if($(this).val() == "") {
        $(this).siblings('.mask').eq(0).removeClass('active')
    }
});