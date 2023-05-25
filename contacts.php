<?php

/**
 * Template Name: Contacts Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header()
?>

</div>
<!-- end header section -->



<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <section class="about_section layout_padding">
            <div class="container">
                <h2 class="main-heading ">
                    <?php the_title() ?>
                </h2>
                <p class="text-center">
                    <?php the_content() ?>
                </p>
                <div class="about_img-box ">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <!--
                    <img src="images/kids.jpg" alt="" class="img-fluid w-100">-->
                </div>

                <div style="display: flex; flex-direction: row;">
                    <div style="margin-right: 20px;">
                        <?php echo do_shortcode('[contact-form-7 id="45" title="main"]') ?>
                    </div>
                    <?php echo do_shortcode('[wpgmza id="1"]') ?>
                </div>

            </div>
        </section>

<?php
    }
}
?>

<?php
get_footer()
?>