const contentElement = document.querySelector('div[class*="_single__content_wrapper"]');
const contentMergeElement = document.querySelector(".merge");
const navigationElement = document.querySelector('div[class*="_single__post_navigation"]');
const moveElement = document.querySelector('div[class*="_single__content_wrapper-content"]');


let x = window.matchMedia("(min-width: 650px)")
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