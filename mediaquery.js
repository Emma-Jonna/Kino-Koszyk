const contentElement = document.querySelector(".books_single__content_wrapper");
const contentMergeElement = document.querySelector(".merge");

const navigationElement = document.querySelector(".books_single__post_navigation");

const moveElement = document.querySelector(".books_single__content_wrapper-content");

let x = window.matchMedia("(min-width: 1000px)")
function checkBrowserWidth(x) {
    if (x.matches) {
        contentElement.appendChild(navigationElement);
    } else {
        contentMergeElement.replaceChild(navigationElement, moveElement);
        contentMergeElement.appendChild(moveElement);
    }
  }
  
checkBrowserWidth(x)
x.addListener(checkBrowserWidth)