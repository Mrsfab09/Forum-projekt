let menu=document.querySelector("#menu-icon");
let navbar=document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toogle('bx-x');
    navbar.classList.toogle('open');
}