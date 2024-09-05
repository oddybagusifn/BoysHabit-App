

let body = document.body
let cartBtn = document.getElementById('cartButton')
let cart = document.getElementById('cart')
let cartObj = document.getElementById('cartView')
let closeCart = document.getElementById('closeCart')



cartBtn.addEventListener('click', function(){
    body.style.overflow = 'hidden'
    cart.style.left = '0'
    cart.style.backgroundColor = 'rgb(28, 28, 28, .4)'
    cartObj.style.left = '90rem'
    cartObj.style.transition = '.2s ease-in-out'
})

closeCart.addEventListener('click', function(){
    body.style.overflow = 'auto'
    cartObj.style.left = '120rem'
    cartObj.style.transition = '.2s ease-in-out'
    cart.style.left = '120rem'
    cart.style.backgroundColor = 'rgb(28, 28, 28, 0)'
})

