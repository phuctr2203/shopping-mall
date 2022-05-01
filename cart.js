// config notification 

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

// get element cart quantity 

const cartQuantity = document.querySelector('#cart-quantity');

// get cart from local storage

let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];

// show quantity of cart

cartQuantity.innerHTML = cart.length;

let productItem = {};

// select option before pick product 

function pickOption(item) {
    productItem = item;
}

//  action add to cart 

function addToCart() {
    console.log(productItem)
    if (productItem.id) {
        cart.push(productItem);
        localStorage.setItem('cart', JSON.stringify(cart));
        toastr["success"]("Item has been successfully added to cart!")
        cartQuantity.innerHTML = cart.length;
    }
    else {
        toastr["warning"]("Please select a product option!");
    }
}

function saveToCart() {
    toastr["warning"]("Please select a product!");
    toastr["success"]("Product successfully added!")
}

// get elements cart of checkout page

const cartQuantityb = document.querySelector('#cart-quantity-b');
const cartTotal = document.querySelector('#cart-total-b');
const cartBody = document.querySelector('#cart-body');

//  show cart detail checkout page

function showCart() {
    cartBody.innerHTML = generateCartItemHtml(cart);
    cartQuantityb.innerHTML = cart.length;
    let total = 0;
    cart.forEach(item => {
        total += item.price;
    });
    cartTotal.innerHTML = format2(total, ' VND');
}

// generate one item 

function generateCartItemHtml(items) {
    return items.map(item => {
        return `  
        <p>
             <a href="javascript:void(0)">${item.name}</a><span class="price">${format2(item.price, ' VND')}</span>
        </p>
        `;
    }).join(" ")
}

function clearCart() {
    cart = [];
    localStorage.setItem('cart', JSON.stringify(cart));
    cartBody.innerHTML = "";
    cartQuantity.innerHTML = 0;
    cartQuantityb.innerHTML = 0;
    cartTotal.innerHTML = 0;
}

function checkOut() {
}

// check if curent page is thankyou, run function clearCart

if (window.location.href.indexOf('ThankYou') != -1) {
    clearCart();
}

// check if curent page is Checkout, run function showCart

if (window.location.href.indexOf('Checkout') != -1) {
    showCart();
}

// format price 

function format2(n, currency) {
    return n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') + currency;
}
