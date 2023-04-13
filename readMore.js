const readMoreText = document.querySelector(".read-more-container p");
const readMoreImage = document.querySelector(".read-more-container img");
const readMore = document.querySelector(".read-more-wrapper");
const content = document.querySelector(".about__content_text");
const readMoreButton = document.querySelector(".read-more-wrapper");
const contactInfoBo = document.querySelector(".contact-info-bo");
const contactInfoJoanna = document.querySelector(".contact-info-joanna");
const contactBoButton = document.querySelector(".contact-bo-button");
const contactJoannaButton = document.querySelector(".contact-joanna-button");

if (window.innerWidth > 700) {
  readMoreButton.classList.add("hidden");
  contactJoannaButton.classList.add("hidden");
  contactBoButton.classList.add("hidden");
} else {
  contactInfoBo.classList.add("hidden");
  contactInfoJoanna.classList.add("hidden");
  contactJoannaButton.classList.remove("hidden");
  contactBoButton.classList.remove("hidden");
}

window.addEventListener("resize", () => {
  if (window.innerWidth > 700) {
    readMoreButton.classList.add("hidden");
    content.style.height = "auto";
    contactInfoBo.classList.remove("hidden");
    contactInfoJoanna.classList.remove("hidden");
    contactJoannaButton.classList.add("hidden");
    contactBoButton.classList.add("hidden");
  } else {
    readMoreButton.classList.remove("hidden");
    content.style.height = "130px";
    contactInfoBo.classList.add("hidden");
    contactInfoJoanna.classList.add("hidden");
    contactJoannaButton.classList.remove("hidden");
    contactBoButton.classList.remove("hidden");
  }
});

readMoreText.addEventListener("click", () => {
  if (readMore.classList.contains("active")) {
    readMore.classList.remove("active");
    content.style.height = "130px";
    readMoreText.textContent = "Read more"; 
    readMoreImage.classList.remove("rotate");
  } else {
    readMore.classList.add("active");
    content.style.height = "auto";
    readMoreText.textContent = "Read less"; 
    readMoreImage.classList.add("rotate");
  }
});
