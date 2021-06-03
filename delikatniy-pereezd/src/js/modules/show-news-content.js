// Show/hide news content ==============================
//======================================================
var newsBtn = $('.button__news');
var mmsBtn = $('.button__mms');
var blogBtn = $('.button__blog');
var newsWrap = $('.news-wrap');
var mmsWrap = $('.mms-wrap');
var blogWrap = $('.blog-wrap');
var blogApartmentCard = $('.blog-apartment');
var blogOfficeCard = $('.blog-office');
var allMoving = $('.category-all-moving');
var apartmentMoving = $('.category-apartment-moving');
var officeMoving = $('.category-office-moving');
var newsCategoriesWrap = $('.news__categories--wrap')
var blogHeader = $('#blog-header')
var newsHeader = $('#news-header')
var blogBreadcrumb = $('#blog-breadcrumb')
var newsBreadcrumb = $('#news-breadcrumb')

newsBtn.on('click', function() {
    newsWrap.removeClass('diactivated')
    mmsWrap.addClass('diactivated')
    blogWrap.addClass('diactivated')
})

mmsBtn.on('click', function() {
    newsWrap.addClass('diactivated')
    mmsWrap.removeClass('diactivated')
    blogWrap.addClass('diactivated')
})

blogBtn.on('click', function() {
    newsWrap.addClass('diactivated')
    mmsWrap.addClass('diactivated')
    blogWrap.removeClass('diactivated')
    newsCategoriesWrap.removeClass('diactivated')
    blogHeader.removeClass('diactivated')
    newsHeader.addClass('diactivated')
    blogBreadcrumb.removeClass('diactivated')
    newsBreadcrumb.addClass('diactivated')
})

$(document).on('click', function(event) {
    var target = $( event.target );
    if(target.is('.button__mms') || target.is('.button__news')) {
        newsCategoriesWrap.addClass('diactivated')
        blogHeader.addClass('diactivated')
        newsHeader.removeClass('diactivated')
        blogBreadcrumb.addClass('diactivated')
        newsBreadcrumb.removeClass('diactivated')
    }
})

allMoving.on('click', function() {
    blogApartmentCard.removeClass('diactivated')
    blogOfficeCard.removeClass('diactivated')
})

apartmentMoving.on('click', function() {
    blogApartmentCard.removeClass('diactivated')
    blogOfficeCard.addClass('diactivated')
})

officeMoving.on('click', function() {
    blogApartmentCard.addClass('diactivated')
    blogOfficeCard.removeClass('diactivated')
})


let productBtnDesktop = document.querySelectorAll('.button__select.desktop');
let newsCategoryBtn = document.querySelectorAll('.news__category--btn');
let lastClickedBtnDesktop = productBtnDesktop[0];
let lastNewsCategoryBtn = newsCategoryBtn[0];

for( let z = 0; z < productBtnDesktop.length; z++ ) {
    productBtnDesktop[z].onclick = function() {
        lastClickedBtnDesktop.classList.remove('active');
      this.classList.add('active');
      lastClickedBtnDesktop = this; 
    }
}

for( let b = 0; b < newsCategoryBtn.length; b++ ) {
    newsCategoryBtn[b].onclick = function() {
        lastNewsCategoryBtn.classList.remove('active');
      this.classList.add('active');
      lastNewsCategoryBtn = this; 
    }
}