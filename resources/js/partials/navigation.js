const hamburgerBtn = document.querySelector('.hamburger')
const menu = document.querySelector('#menu')

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle("is-active");
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
}
hamburgerBtn.addEventListener('click',hamburgerHandler)