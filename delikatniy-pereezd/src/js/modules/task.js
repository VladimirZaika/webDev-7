let officeMovingBtn = document.getElementById('office-moving-btn')
let officeMovingImg = document.getElementById('office-moving-img')
let furnitureTransportationgBtn = document.getElementById('furniture-transportation-btn')
let furnitureTransportationgImg = document.getElementById('furniture-transportation-img')
let packingBtn = document.getElementById('packing-btn')
let packingImg = document.getElementById('packing-img')
let keepingBtn = document.getElementById('keeping-btn')
let keepingImg = document.getElementById('keeping-img')
let furnitureAssemblyBtn = document.getElementById('furniture-assembly-btn')
let furnitureAssemblyImg = document.getElementById('furniture-assembly-img')

officeMovingBtn.onmouseover = function() {
    officeMovingImg.classList.add('active')
}

officeMovingBtn.onmouseout = function() {
    officeMovingImg.classList.remove('active')
}

furnitureTransportationgBtn.onmouseover = function() {
    furnitureTransportationgImg.classList.add('active')
}

furnitureTransportationgBtn.onmouseout = function() {
    furnitureTransportationgImg.classList.remove('active')
}

packingBtn.onmouseover = function() {
    packingImg.classList.add('active')
}

packingBtn.onmouseout = function() {
    packingImg.classList.remove('active')
}

keepingBtn.onmouseover = function() {
    keepingImg.classList.add('active')
}

keepingBtn.onmouseout = function() {
    keepingImg.classList.remove('active')
}

furnitureAssemblyBtn.onmouseover = function() {
    furnitureAssemblyImg.classList.add('active')
}

furnitureAssemblyBtn.onmouseout = function() {
    furnitureAssemblyImg.classList.remove('active')
}