const readMoreText = document.querySelector(".read-more-container p");
const readMoredots = document.querySelector(".read-more-wrapper");
const content = document.querySelector(".about__content_text");
const readMoreButton = document.querySelector(".read-more-wrapper");

console.log(window.innerWidth);

if (window.innerWidth > 1000) {
  readMoreButton.classList.add("hidden");
}

window.addEventListener("resize", () => {});

readMoreText.addEventListener("click", () => {
  if (readMoredots.classList.contains("active")) {
    readMoredots.classList.remove("active");
    content.style.height = "130px";
  } else {
    readMoredots.classList.add("active");
    content.style.height = "auto";
  }
});
