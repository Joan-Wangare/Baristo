// SPLASHSCREEN

const logo = document.querySelectorAll("#logo path");

for (let i = 0; i < logo.length; i++) {
  //   console.log("Letter " + i + " is " + logo[i].getTotalLength());
  console.log(`letter ${i} is ${logo[i].getTotalLength()}`);
}

// SIGN UP

const openModalButtons = document.querySelectorAll("[data-modal-target]");
const closeModalButtons = document.querySelectorAll("[data-close-button]");
const overlay = document.getElementById("overlay");

// CART SIDEBAR CODE
const addToCart = document.querySelectorAll(".add-to-cart-btn");
const cartPopSidebar = document.querySelector(".cart-sidebar");
addToCart.forEach(function (btn) {
  btn.addEventListener("click", () => {
    cartPopSidebar.classList.add("showCart");
    setTimeout(hideCart, 4000); //CALL THE hideCart AFTER 3secs of display
  });
});

function hideCart() {
  //FUNCTION TO HIDE THE CART AFTER DISPLAY
  cartPopSidebar.classList.remove("showCart");
}
// END OF CART SIDEBAR CODE

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
