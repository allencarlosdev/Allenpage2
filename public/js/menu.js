const headerContact__icon = document.querySelector(".header-contact__icon");
const menuHeader = document.querySelector(".menu-header");

headerContact__icon.addEventListener("Click", () => {
    menuHeader.classList.toggle(".menu-header--visible")
});
