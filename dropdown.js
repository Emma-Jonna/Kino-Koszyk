const btn = document.querySelector(".dropdown-select-placeholder");
const btnContainer = document.querySelector(".dropdown-select-container");

btn.addEventListener("click", () => {
  btnContainer.classList.toggle("dropdown-select-container-open");
  btn.classList.toggle("dropdown-select-placeholder-active");
});
