// Do not repeat yourself. Keep common code in modules!
// import { ... } from "./modules/...";

// You can import assets this way or just use entrypoint in webpack config
// import "./modules/assets";

// ...
import Swiper from 'swiper/bundle';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/modal';
import "./modules/request-input";
// import Swiper, { Navigation, Pagination } from 'swiper';
// Swiper.use([ Navigation, Pagination ]);


// Open/close burger ===================================
// =====================================================
let getBurgerBtn = document.getElementById('burger-button');
let getBurgeMenu = document.getElementById('burger-menu');
let getDesktopContent = document.getElementById('desktop-content');
let getAllPoint = document.querySelectorAll('.point');
let getFirstPoint = document.querySelector('.one-of-nine');
let getSecondPoint = document.querySelector('.two-of-nine');

getBurgerBtn.addEventListener('click', function switchClass(e) {
    e.preventDefault()
    getBurgeMenu.classList.toggle('active')
    getDesktopContent.classList.toggle('active')
    getFirstPoint.classList.toggle('cross')
    getSecondPoint.classList.toggle('cross')

    for (let i = 0; i < getAllPoint.length; i++) {
        getAllPoint[i].classList.toggle("active")
    };
});

window.onkeydown = function removeActiveClass(event) {
    if (event.keyCode == 27) {
        getBurgeMenu.classList.remove('active')
        getDesktopContent.classList.remove('active')
        getFirstPoint.classList.remove('cross')
        getSecondPoint.classList.remove('cross')
    
        for (let i = 0; i < getAllPoint.length; i++) {
            getAllPoint[i].classList.remove("active")
        };
    }
};

// Modal order call validity ===============================
// =========================================================
let orderRequiredText = document.getElementById('order-error-text')
let orderInput = document.getElementById('order-input')
let orderForm = document.getElementById('request-form-order')
let modalHeader = document.querySelector('.order__header')
let modalBody = document.querySelector('.order__body')
let modalOrderPurchase = document.querySelector('.order__purchase')

orderForm.addEventListener('submit', function OrderSubmit(event) {
    if(!orderInput.checkValidity()) {
        orderRequiredText.style.maxHeight = orderRequiredText.scrollHeight + 'px'
        orderInput.setCustomValidity(' ')
    } else {
        modalOrderPurchase.classList.add('active')
        modalHeader.classList.remove('active')
        modalBody.classList.remove('active')
        event.preventDefault()
    }
})

orderInput.oninvalid = function() {
    orderRequiredText.style.maxHeight = orderRequiredText.scrollHeight + 'px'
    this.setCustomValidity(' ')
}

orderInput.oninput = function() {
    orderRequiredText.style.maxHeight = '0'
    this.setCustomValidity('')
}

// Order form show input info ===================================
// ==============================================================
var orderTitle = $('.order__title')
var dayWrapperOrder = $('.day-wrapper-order')
var hourWrapperOrder = $('.hour-wrapper-order')
var minuteWrapperOrder = $('.minute-wrapper-order')
var bodyOrder = $('.order__dropdown-body')
var inputHiddenOrder = $('#input-hidden-order')
var dayTextOrder
var hourTextOrder
var minuteTextOrder
var titleContentOrder

function showTimeOrder() {
  dayTextOrder = dayWrapperOrder.find('.order-day.day-active-slide').text()
  hourTextOrder = hourWrapperOrder.find('.order-hour.hour-active-slide').text()
  minuteTextOrder = minuteWrapperOrder.find('.order-minute.minute-active-slide').text()
  titleContentOrder = dayTextOrder + ' ' + 'в' + ' ' + hourTextOrder + ':' + minuteTextOrder
  orderTitle.html(titleContentOrder)
  inputHiddenOrder.val(titleContentOrder)
}

bodyOrder.on('click', showTimeOrder)

// Swiper init ===================================
//================================================
var autoplay = 5000;
var id;
var swiperHero = new Swiper('.swiper-hero', {
    loop: true,
    spaceBetween: 50,
    slidesPerView: 1,
    speed: 1000,
    progress: {
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    on: {
         progress: move
     },
    pagination: {
      el: '.swiper-count',
      type: 'fraction',
    },
    navigation: {
        nextEl: '.hero-button-next',
        prevEl: '.hero-button-prev',
    },
    onProgress: move,
});

function move() {
    clearInterval(id);
    var elem = document.getElementById("hero-progressbar"); 
    var width = 1;
    var autoplayTime = autoplay/ 100;
    id = setInterval(frame, autoplayTime);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
        }
    }
}

var swiperFourRules = new Swiper('.swiper-four-rules', {
    pagination: {
      el: '.four-rules-bullets',
      clickable: true,
    },
    spaceBetween: 30,
    slidesPerView : 'auto',
});

var swiperTheyTalk = new Swiper('.they-talk-about-us', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.they-talk__pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.they-talk-button-next',
        prevEl: '.they-talk-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 2,
          spaceBetween: 48,
        },
    }
});

var swiperAdditionalInfo = new Swiper('.additional-information', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.additional-info-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.additional-info-button-next',
        prevEl: '.additional-info-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperDaySwipe = new Swiper('.day-swipe', {
    direction: 'vertical',
    spaceBetween: 8,
    centeredSlides: true,
    speed: 500,
    loop: true,
    allowTouchMove: false,
    slideActiveClass: 'day-active-slide',
    navigation: {
      nextEl: '.day-swipe-button-next',
      prevEl: '.day-swipe-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 5
        }
    },
});

var swiperHourSwipe = new Swiper('.hour-swipe', {
    direction: 'vertical',
    spaceBetween: 8,
    centeredSlides: true,
    speed: 500,
    loop: true,
    allowTouchMove: false,
    slideActiveClass: 'hour-active-slide',
    navigation: {
      nextEl: '.hour-swipe-button-next',
      prevEl: '.hour-swipe-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 5
        }
    },
});

var swiperMinuteSwipe = new Swiper('.minute-swipe', {
    direction: 'vertical',
    spaceBetween: 8,
    centeredSlides: true,
    speed: 500,
    loop: true,
    allowTouchMove: false,
    slideActiveClass: 'minute-active-slide',
    navigation: {
      nextEl: '.minute-swipe-button-next',
      prevEl: '.minute-swipe-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 4
        }
    },
});

var swiperOurServicesBlock = new Swiper('.our-services', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.our-services-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.our-services-button-next',
        prevEl: '.our-services-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperStock = new Swiper('.stock-block', {
    spaceBetween: 30,
    slidesPerView : 1,
    pagination: {
        el: '.stock-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.stock-button-next',
        prevEl: '.stock-button-prev',
    },
});

var swiperMovingChecklists = new Swiper('.moving-checklists', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.moving-checklists-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.moving-checklists-button-next',
        prevEl: '.moving-checklists-button-prev',
    },
});

var swiperSaveProperty = new Swiper('.save-property', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.save-property-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.save-property-button-next',
        prevEl: '.save-property-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperFullConstraction = new Swiper('.full-construction', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.full-construction-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.full-construction-button-next',
        prevEl: '.full-construction-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperCorporateService = new Swiper('.corporate-service', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.corporate-service-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.corporate-service-button-next',
        prevEl: '.corporate-service-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperFourStep = new Swiper('.four-step', {
    pagination: {
      el: '.four-step-bullets',
      clickable: true,
    },
    spaceBetween: 30,
    slidesPerView : 'auto',
});

var swiperCalculationOptions = new Swiper('.calculation-options', {
    pagination: {
      el: '.calculation-options-bullets',
      clickable: true,
    },
    spaceBetween: 30,
    slidesPerView : 'auto',
});

var swiperStuff = new Swiper('.stuff', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.stuff-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.stuff-button-next',
        prevEl: '.stuff-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperCustomer = new Swiper('.customer-reviews', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.customer-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.customer-button-next',
        prevEl: '.customer-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperAdditionalInfo = new Swiper('.article-slider', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.article-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.article-button-next',
        prevEl: '.article-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 3,
          spaceBetween: 48,
        },
    }
});

var swiperLogoCompany = new Swiper('.logo-company', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.logo-company-bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.logo-company-button-next',
        prevEl: '.logo-company-button-prev',
    },
    breakpoints: {
        1280: {
          slidesPerView: 1.5,
          spaceBetween: 48,
        },
    }
});

var swiperCases = new Swiper('.cases', {
    spaceBetween: 30,
    slidesPerView : 'auto',
    pagination: {
        el: '.cases-bullets',
        clickable: true,
    },
});




