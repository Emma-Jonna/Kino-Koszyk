const readMoreText = document.querySelector(".read-more-container p");
const readMoreImage = document.querySelector(".read-more-container img");
const readMore = document.querySelector(".read-more-wrapper");
const content = document.querySelector(".about__content_text");
const readMoreButton = document.querySelector(".read-more-wrapper");
const contactInfoBo = document.querySelector(".contact-info-bo");
const contactInfoJoanna = document.querySelector(".contact-info-joanna");

if (window.innerWidth > 700) {
  readMoreButton.classList.add("hidden");
} else {
  contactInfoBo.classList.add("hidden");
  contactInfoJoanna.classList.add("hidden");
}

window.addEventListener("resize", () => {
  if (window.innerWidth > 700) {
    readMoreButton.classList.add("hidden");
    content.style.height = "auto";
    contactInfoBo.classList.remove("hidden");
    contactInfoJoanna.classList.remove("hidden");
  } else {
    readMoreButton.classList.remove("hidden");
    content.style.height = "130px";
    contactInfoBo.classList.add("hidden");
    contactInfoJoanna.classList.add("hidden");
  }
});

readMoreText.addEventListener("click", () => {
  if (readMore.classList.contains("active")) {
    readMore.classList.remove("active");
    content.style.height = "130px";
  } else {
    readMore.classList.add("active");
    content.style.height = "auto";
  }
});
