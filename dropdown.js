const btn = document.querySelector(".dropdown-select-placeholder");
const btnContainer = document.querySelector(".dropdown-select-container");

const gallerySectionBooks = document.querySelector(".books_gallery");
const targetElementsZ = document.querySelectorAll('section[class*="_gallery"]');


btn.addEventListener("click", () => {
  btnContainer.classList.toggle("dropdown-select-container-open");
  btn.classList.toggle("dropdown-select-placeholder-active");
  targetElementsZ.forEach(selectedPageElement => {
    if (selectedPageElement) {
        console.log(selectedPageElement);
        selectedPageElement.classList.toggle("gallery-z");
    }
});
});
