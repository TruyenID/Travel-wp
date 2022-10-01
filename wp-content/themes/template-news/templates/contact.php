<?php
 /* Template Name: Page Contact*/
?>
<?php get_header(); ?>
<div class="contact">
    <div class="container">
        <div class="items-contacts">
            <div class="item-contact">
                <div class="title-contact">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="form-contact">
                  <?php the_content(); ?>
                </div>
                <!-- <form  action="">
                    <input type="text" placeholder="First Name*">
                    <input type="text" placeholder="Last Name*">
                    <input type="email" placeholder="Email Subject*">
                    <textarea name="contact" placeholder="Write something here..." id="contact" cols="30" rows="10"></textarea>
                    <input type="submit" id="btn-contact" value="Submit Email">
                </form> -->
            </div>
            <div class="img-contact">
                <img src="<?php bloginfo('template_directory') ?>/public/images/img-contact.png" alt="">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>