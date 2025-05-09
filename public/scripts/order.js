const CART_LIST = document.querySelector('.user-cart__list')
const CART_ITEMS = CART_LIST.children
const ITEMS = []
const ORDER_LIST = document.querySelector('.user-cart__order-list-items')
const ORDER_ITEMS = document.querySelector('.order-items');


for (const cartItem of CART_ITEMS) {
    ITEMS.push({
        name: cartItem.innerText, category: cartItem.children[1].children[1][2].value
    })
}

console.log(ITEMS)

for (const item of ITEMS) {
    ORDER_LIST.insertAdjacentHTML('afterbegin', `
        <p>${item.name}</p>
    `)
    ORDER_ITEMS.insertAdjacentHTML('afterbegin', `
        <input type="hidden" name="category[]" value="${item.category}">
    `)
}
