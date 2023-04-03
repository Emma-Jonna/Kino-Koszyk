<?php get_header(); ?>
<section class="contact">
    <h2>
        <?=get_the_title()?>
    </h2>
    <p>
        <?=the_content()?>
    </p>
    
    <form action="contact-handler.php" method="post" enctype="text/plain" class="contact-form">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10" style="resize: none;"></textarea>
        </div>
        <button type="submit">Send message</button>
    </form>
</section>

<?php get_footer(); ?>