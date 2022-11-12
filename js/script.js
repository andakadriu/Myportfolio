let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

};
let icon = document.getElementById("icon");
icon.onclick = function (){
    document.body.classList.toggle("dark-theme");
}

