let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toogle('bx-menu');
    navbar.classList.toogle('open');
} 