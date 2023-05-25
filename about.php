<?php

/**
 * Template Name: About Template
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
            <div style="float: right; margin-right: 30px; background: wheat; border-radius: 10px; padding:10px;">
                <?php if (!dynamic_sidebar('right-sidebar')) : ?>

                <?php endif; ?>
            </div>
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
            </div>
        </section>

<?php
    }
}
?>

<?php
get_footer()
?>