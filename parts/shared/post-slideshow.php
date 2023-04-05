<div class="slideshow-section">
    <div class="slideshow-wrapper">
        <?php get_template_part("parts/shared/post", "hero"); ?>
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
        slideshowItems[slideshowIndex - 1].style.display = "block";
        circles[slideshowIndex - 1].className += " activeCircle";
        setTimeout(slideshow, 3000);
    }
</script>