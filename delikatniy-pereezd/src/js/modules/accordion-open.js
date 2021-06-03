
let accordionBtn = document.querySelectorAll('.button__accordion')
let lastOpened = accordionBtn[0];

for( let j = 0; j < accordionBtn.length; j++ ) {
    accordionBtn[j].onclick = function() {
        if (this.classList.contains('active')) {
            accordionBtn[j].classList.remove('active')
            this.nextElementSibling.style.maxHeight = '0px';
            this.classList.remove('active')
            this.parentNode.classList.remove('active')
            this.nextElementSibling.classList.remove('active')
            } else {
                lastOpened.classList.remove('active')
                lastOpened.nextElementSibling.style.maxHeight = '0px';
                lastOpened.parentNode.classList.remove('active')
                lastOpened.nextElementSibling.classList.remove('active')
                this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + 'px';
                this.classList.add('active')
                this.parentNode.classList.add('active')
                this.nextElementSibling.classList.add('active')
                lastOpened = this
            }
        }
    }

    // var accItem = document.getElementsByClassName('accordion');
    // var accHD = document.getElementsByClassName('accordionItemHeading');
    // for (i = 0; i < accordionBtn.length; i++) {
    //     accordionBtn[i].addEventListener('click', toggleItem, false);
    // }
    // function toggleItem() {
    //     let accordion = this.parentNode.className;
    //     let accordionBody = this.nextElementSibling.className;
    //     for (i = 0; i < accItem.length; i++) {
    //         accItem[i].className = 'accordion';
    //     }
    //     if (itemClass == 'accordion') {
    //         this.parentNode.className = 'accordionItem open';
    //     }
    // }