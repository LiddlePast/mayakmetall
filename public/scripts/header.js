const HEADER_MENU_BTN_CLOSED = document.querySelector('.menu-button--closed')
const HEADER_MENU_BTN_OPENED = document.querySelector('.menu-button--opened')
const MOBILE_MENU = document.querySelector('.mobile-menu')
HEADER_MENU_BTN_CLOSED.addEventListener('click', () => {
    MOBILE_MENU.classList.add('!top-28')
    HEADER_MENU_BTN_CLOSED.classList.add('hidden')
    HEADER_MENU_BTN_OPENED.classList.remove('hidden')
})
HEADER_MENU_BTN_OPENED.addEventListener('click', () => {
    MOBILE_MENU.classList.remove('!top-28')
    HEADER_MENU_BTN_CLOSED.classList.remove('hidden')
    HEADER_MENU_BTN_OPENED.classList.add('hidden')
})
