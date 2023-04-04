</main>
<?php wp_footer(); ?>

<div class="footer">
    <div class="footer-contact-wrapper">
        <div class="footer-contact-text">
            <?php dynamic_sidebar("footer-contact"); ?>
        </div>
        <div class="footer-contact-link">
            <a href="#">Contact</a>
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