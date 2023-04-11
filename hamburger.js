const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");
const menuLinks = document.querySelectorAll(".nav__list_item");

function toggleMenu() {
    if (nav.classList.contains("showMenu")) {
        nav.classList.remove("showMenu");
        hamburger.style.color = "black";
    }
    else {
        nav.classList.add("showMenu");
        hamburger.style.color = "white";
    }
};

hamburger.addEventListener("click", toggleMenu);

menuLinks.forEach(menuLink => {
    menuLink.addEventListener("click", toggleMenu);
});
