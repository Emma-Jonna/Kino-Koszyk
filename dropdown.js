const btn = document.querySelector(".dropdown-select-placeholder");
const btnContainer = document.querySelector(".dropdown-select-container");

const gallerySectionBooks = document.querySelector(".books_gallery");
const targetElementsZ = document.querySelectorAll('section[class*="_gallery"]');

let clickedPositionY = 0;
let dropDownActive = false;

const toggleDropdown = () => {
  btnContainer.classList.toggle("dropdown-select-container-open");
  btn.classList.toggle("dropdown-select-placeholder-active");
  targetElementsZ.forEach((selectedPageElement) => {
    if (selectedPageElement) {
      console.log(selectedPageElement);
      selectedPageElement.classList.toggle("gallery-z");
    }
  });
};

document.addEventListener("scroll", () => {
  if (dropDownActive && clickedPositionY != window.scrollY) {
    toggleDropdown();
    dropDownActive = !dropDownActive;
  }
});

btn.addEventListener("click", () => {
  toggleDropdown();
  clickedPositionY = window.scrollY;
  dropDownActive = !dropDownActive;
});
