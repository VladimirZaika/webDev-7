let articleBreadcrumb = document.getElementById('article-name')
let articleHeader = document.getElementById('title-name')

document.addEventListener('DOMContentLoaded', function(){
    articleBreadcrumb.textContent = articleHeader.innerText
})