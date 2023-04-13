<?php get_header(); ?>
<section class="contact">
    <div class="contact-top">
        <h2 class="contact-main-title">
            <?= strtoupper(get_the_title()); ?>
        </h2>

        <div class="contact__top_content">
            <?= the_content() ?>
        </div>
    </div>

    <div class="contact-main">
        <article class="contact__main_item">
            <h3 class="contact-title">kino.koszyk@gmail.com</h3>
            <div class="contact__main_item_content">
                <form action="mailto:kino.koszyk@gmail.com" method="get" enctype="text/plain">
                    <div class="contact__main_button">
                        <input type="submit" value="Email" class="contact__main_input contact-button-text">
                        <img src="<?= get_template_directory_uri() ?>/assets/contact-arrow.svg">
                    </div>
                </form>
            </div>
        </article>

        <article class="contact__main_item">
            <h3 class="contact-title">Tel. +46 768 32 74 55</h3>
            <div class="contact__main_item_content">
                <a href="tel:46-768-32-74-55">
                    <div class="contact__main_button">
                        <h3 class="contact-button-text">Call us</h3>
                        <img src="<?= get_template_directory_uri() ?>/assets/contact-arrow.svg">
                    </div>
                </a>
            </div>
        </article>

        <article class="contact__main_item">
            <h3 class="contact-title">Facebook: Kino Koszyk</h3>
            <div class="contact__main_item_content">
                <a href="https://www.facebook.com/kinokoszyk/">
                    <div class="contact__main_button">
                        <h3 class="contact-button-text">See our page</h3>
                        <img src="<?= get_template_directory_uri() ?>/assets/contact-arrow.svg">
                    </div>
                </a>
            </div>
        </article>
    </div>

</section>

<?php get_footer(); ?>