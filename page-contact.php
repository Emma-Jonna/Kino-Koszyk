<?php get_header(); ?>
<section class="contact">
    <h2>Contact us</h2>
    <p>Contact us regarding potenial collaborations or about requests to use any of our photographs.</p>
</section>
<section class="contact-form-section">
    <form action="" method="get" enctype="text/plain">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="text-area">Message</label>
            <textarea name="text-area" cols="30" rows="10" style="resize: none;"></textarea>
        </div>
        <button type="submit">Send message</button>
    </form>
</section>
<?php get_footer(); ?>