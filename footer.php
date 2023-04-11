</main>
<?php wp_footer(); ?>

<script src="<?= get_template_directory_uri() ?>/hamburger.js"></script>

<div class="footer">
    <div class="footer-contact-wrapper">
<!--         <h5 class="h3-regular">Get In Touch With Kino Koszyk</h5> -->
        <div class="footer-contact-text">
            <?php dynamic_sidebar("footer-contact"); ?>
        </div>
        <div class="footer-contact-link">
            <a href="http://kino-koszyk-new.local/contact/">Contact</a>
        </div>
    </div>

    <div class="footer-address-wrapper">
        <div class="footer-address-text">
            <?php dynamic_sidebar("footer-address"); ?>
        </div>
        <div class="footer-address-image">
            <img src="<?= get_template_directory_uri() ?>/assets/Kino-Koszyk-logo-footer.svg" alt="Logo">
        </div>
    </div>
</div>

</body>

</html>