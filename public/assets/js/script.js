// ===== BURGER MENU =====

// Setting some elements to variables
var burger = document.querySelector('.header__burger');
var nav = document.querySelector('.header__nav');
var header = document.querySelector('.header');
var body = document.querySelector('body');


// Listen to burger click
burger.onclick = function () {
    burger.classList.toggle('active');
    nav.classList.toggle('active');
    body.classList.toggle('locked');
}



// ===== SCROLL CHANGES =====
window.onscroll = function () {
    let distance = 15;
    if (document.body.scrollTop > distance || document.documentElement.scrollTop > distance) {
        header.classList.add('scrolling');
    } else {
        header.classList.remove('scrolling');
    }
}
