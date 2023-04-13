const workOfJoannaTop = document.querySelector(".joanna_work_top");
const workOfJoannaBottom = document.querySelector(".joanna_work_bottom");
const readMoreButtonMobile = document.querySelector(
  ".read-more-container-joanna"
);
const readMoreContent = document.querySelector(".joanna__top_container-right");
const reaMoreButtonDesktop = document.querySelector(
  ".read-more-container-joanna-anchor"
);

if (window.innerWidth > 700) {
  workOfJoannaBottom.classList.add("hidden");
  readMoreButtonMobile.classList.add("hidden");
  reaMoreButtonDesktop.classList.remove("hidden");
} else {
  workOfJoannaTop.classList.add("hidden");
  readMoreButtonMobile.classList.remove("hidden");
  reaMoreButtonDesktop.classList.add("hidden");
}

window.addEventListener("resize", () => {
  if (window.innerWidth > 700) {
    workOfJoannaTop.classList.remove("hidden");
    workOfJoannaBottom.classList.add("hidden");
    readMoreButtonMobile.classList.add("hidden");
    readMoreContent.style.height = "auto";
    reaMoreButtonDesktop.classList.remove("hidden");
  } else {
    workOfJoannaTop.classList.add("hidden");
    workOfJoannaBottom.classList.remove("hidden");
    readMoreButtonMobile.classList.remove("hidden");
    readMoreContent.style.height = "130px";
    reaMoreButtonDesktop.classList.add("hidden");
  }
});

readMoreButtonMobile.addEventListener("click", () => {
  if (readMoreContent.classList.contains("active")) {
    readMoreContent.classList.remove("active");
    readMoreContent.style.height = "130px";
  } else {
    readMoreContent.classList.add("active");
    readMoreContent.style.height = "auto";
  }
});
