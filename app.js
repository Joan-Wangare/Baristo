// SPLASHSCREEN
const splash = document.querySelector(".intro");
const logo = document.querySelectorAll("#logo path");

// window.addEventListener("DOMContentLoaded", function(){

//   setTimeout(function(){
//     splash.classList.add("hide");
//   }, 8000)

// })

// for (let i = 0; i < logo.length; i++) {
//   //   console.log("Letter " + i + " is " + logo[i].getTotalLength());
//   console.log(`letter ${i} is ${logo[i].getTotalLength()}`);
// }

// NAVBAR

const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  menu.classList.toggle("active");
})
// document.querySelectorAll(".a").forEach(n => n.addEventListener("click"), () => {
//   burger.classList.remove("active");
//   menu.classList.remove("active");
// })

// CART SIDEBAR CODE $$ ADD TO CART

const addToCart = document.querySelectorAll(".add-to-cart-btn");
const cartPopSidebar = document.querySelector(".cart-sidebar");
let products = {

}

addToCart.forEach(function (btn) {
  btn.addEventListener("click", () => {
    cartPopSidebar.classList.add("showCart");
    setTimeout(hideCart, 10000); //CALL THE hideCart AFTER 3secs of display
  });
});

function hideCart() {
  //FUNCTION TO HIDE THE CART AFTER DISPLAY
  cartPopSidebar.classList.remove("showCart");
}

for (let i=0; i<addToCart.length; i++){
  addToCart[i].addEventListener('click', () => {
    cartNumbers();
  })
}

function onLoadCartNumber(){
  let productNumber = localStorage.getItem('cartNumbers');

  if(productNumber){
    document.querySelector('.home p').textContent = productNumber;
  }

}

function cartNumbers() {
  let productNumber = localStorage.getItem('cartNumbers');

  productNumber = parseInt(productNumber);

  if( productNumber ){
    localStorage.setItem('cartNumbers', productNumber + 1);
    document.querySelector('.home p').textContent = productNumber + 1;
  } else {
    localStorage.setItem('cartNumbers', 1);
    document.querySelector('.home p').textContent = 1;
  }
  
}
onLoadCartNumber();




// SIGN UP

const openModalButtons = document.querySelectorAll("[data-modal-target]");
const closeModalButtons = document.querySelectorAll("[data-close-button]");
const overlay = document.getElementById("overlay");

openModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.querySelector(button.dataset.modalTarget);
    openModal(modal);
  });
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = button.closest(".form");
    closeModal(modal);
  });
});

overlay.addEventListener("click", () => {
  const modals = document.querySelectorAll(".form.active");
  modals.forEach((modal) => {
    closeModal(modal);
  });
});

function openModal(modal) {
  if (modal == null) return;
  modal.classList.add("active");
  overlay.classList.add("active");
}

function closeModal(modal) {
  if (modal == null) return;
  modal.classList.remove("active");
  overlay.classList.remove("active");
}
