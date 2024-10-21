

let body = document.body
let cartBtn = document.getElementById('cartButton')
let overlay = document.getElementById('overlay')
let cartObj = document.getElementById('cartView')
let closeCart = document.getElementById('closeCart')





cartBtn.addEventListener('click', function(){
    body.style.overflow = 'hidden'
    overlay.style.left = '0'
    overlay.style.backgroundColor = 'rgb(28, 28, 28, .4)'
    cartObj.style.left = '90rem'
    cartObj.style.transition = '.2s ease-in-out'
})

closeCart.addEventListener('click', function(){
    body.style.overflow = 'auto'
    cartObj.style.left = '120rem'
    cartObj.style.transition = '.2s ease-in-out'
    overlay.style.left = '120rem'
    overlay.style.backgroundColor = 'rgb(28, 28, 28, 0)'
})

overlay.addEventListener('click', function(){
    body.style.overflow = 'auto'
    cartObj.style.left = '120rem'
    cartObj.style.transition = '.2s ease-in-out'
    overlay.style.left = '120rem'
    overlay.style.backgroundColor = 'rgb(28, 28, 28, 0)'
})



