let hideMenu = document.querySelector("#hidemenu");
let showMenu = document.querySelector("#showmenu");
let navLinks = document.querySelector("#nav-links");

showMenu.addEventListener('click', () => {
    navLinks.style.right = "0"; // show the menu
    showMenu.style.display = "none";
    hideMenu.style.display = "block";
});


hideMenu.addEventListener('click', () => {
    navLinks.style.right = "-200px"; // hide the menu
    showMenu.style.display = "block";
    hideMenu.style.display = "none";
});

