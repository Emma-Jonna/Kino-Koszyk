<?php ?>
<style>
    .slideshow-section {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.slideshow-wrapper {
    position: relative;
    background-color: #D9D9D9;
    width: 100%;
    aspect-ratio: 4/2;
}

.slideshowItem {
    position: absolute;
    top: 0;
    display: none;
    width: 100%;
}

.slideshowItem img {
    aspect-ratio: 4/2;
    width: 100%;
}

.slideshowItem:nth-child(1) img {
    background-color: red;
}

.slideshowItem:nth-child(2) img {
    background-color: blue;
}

.slideshowItem:nth-child(3) img {
    background-color: green;
}

@keyframes slideshowFade {
    from {opacity: 0.5;}
    to {opacity: 1;}
}

.slideshowFade {
    animation-name: fadeIn;
    animation-duration: 500ms;
}

.circle-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.circle {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background-color: #D9D9D9;
    margin: 24px 3.5px 24px 3.5px;
    font-weight: normal;
    transition: background-color 2000ms ease;
}

.activeCircle {
    background-color: black;
}

</style>
<div class="slideshow-section">
    <div class="slideshow-wrapper">
        <div class="slideshowItem slideshowFade">
            <img src="">
        </div>
        <div class="slideshowItem slideshowFade">
            <img src="">
        </div>
        <div class="slideshowItem slideshowFade">
            <img src="">
        </div>
    </div>
    <div class="circle-container">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
</div>
<script>
    let slideshowIndex = 0; 

    slideshow();

    function slideshow() {
        let i; 
        let slideshowItems = document.querySelectorAll(".slideshowItem");
        let circles = document.querySelectorAll(".circle");

        for (i = 0; i < circles.length; i++) {
            slideshowItems[i].style.display = "none";
        }
        slideshowIndex++;
        if (slideshowIndex > slideshowItems.length) {
            slideshowIndex = 1;
        }
        for (i = 0; i < circles.length; i++) {
            circles[i].className = circles[i].className.replace(" activeCircle", "");
        }
        slideshowItems[slideshowIndex-1].style.display = "block";
        circles[slideshowIndex-1].className += " activeCircle";
        setTimeout(slideshow, 2000);
    } 
</script>
