let getmovingChecklistsDesktop = document.querySelector('.moving__checklists.desktop')
let getShowContentBtn = document.querySelector('.moving__checklist--button')

getShowContentBtn.addEventListener('click', () => {
    if (getmovingChecklistsDesktop.classList.contains('active')) {
      getmovingChecklistsDesktop.classList.remove('active');
      getShowContentBtn.classList.remove('active');
      getmovingChecklistsDesktop.style.maxHeight = '775px';
    } else {
      getmovingChecklistsDesktop.classList.add('active');
      getShowContentBtn.classList.add('active');
      getmovingChecklistsDesktop.style.maxHeight = getmovingChecklistsDesktop.scrollHeight + 'px';
    }
});