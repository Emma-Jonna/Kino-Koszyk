const hamburger = document.querySelector(".hamburger");
const hamburgerLines = document.querySelectorAll(".hamburger-line");
const nav = document.querySelector("nav");
const menuLinks = document.querySelectorAll(".nav__list_item");

function toggleMenu() {
    if (nav.classList.contains("showMenu")) {
        nav.classList.remove("showMenu");
        hamburger.classList.remove("close");
        hamburgerLines.forEach((hamburgerLine) => {
            hamburgerLine.style.backgroundColor = "var(--color-warm-black)";
        });
    }
    else {
        nav.classList.add("showMenu");
        hamburger.classList.add("close");
        hamburgerLines.forEach((hamburgerLine) => {
            hamburgerLine.style.backgroundColor = "var(--color-warm-white)";
        });
    }
};

hamburger.addEventListener("click", toggleMenu);

menuLinks.forEach(menuLink => {
    menuLink.addEventListener("click", toggleMenu);
});
