<?php
get_header();
?>

<section class="hero_section ">
    <div class="hero-container container">

        <?php query_posts('showposts=1&cat=2'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="hero_detail-box">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php
                    do_action('plugins/wp_subtitle/the_subtitle', array(
                        'before'        => '<h1>',
                        'after'         => '</h1>',
                        'post_id'       => get_the_ID(),
                        'default_value' => ''
                    ));
                    ?>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <div class="hero_btn-continer">
                        <a href="<?php bloginfo('template_directory'); ?>/контакти" class="call_to-btn btn_white-border">
                            <span>
                                Contact
                            </span>
                            <img src="<?php bloginfo('template_directory'); ?>/images/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>


        <div class="hero_img-container">
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/images/hero.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
</div>
<!-- end header section -->

<!-- teacher section -->
<section class="teacher_section layout_padding-bottom">
    <div class="container">
        <h2 class="main-heading ">
            Our Teachers
        </h2>
        <p class="text-center">
            Ipsum available, but the majority h
        </p>
        <div class="teacher_container layout_padding2">
            <div class="card-deck">

                <?php query_posts('showposts=4&cat=4'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                </div>
                            </div>
                        </a>

                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- teacher section -->

<!-- vehicle section -->
<section class="vehicle_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Vehicles Facility
        </h2>
        <div class="layout_padding-top">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $i = 0; ?>
                    <?php query_posts('showposts=4&cat=5'); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="carousel-item <?php if ($i == 0) {
                                                            echo 'active';
                                                            $i++;
                                                        } ?>">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="vehicle_img-box ">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        }
                                        ?>
                                        <!--<img src="images/bus.png" alt="" class="img-fluid w-100">-->
                                    </div>
                                </a>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
</section>


<!-- vehicle section -->
<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Parents Feedback
        </h2>
        <div class="layout_padding2">

            <?php query_posts('showposts=1&cat=6'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="client_container d-flex flex-column">
                        <div class="client_detail d-flex align-items-center">
                            <div class="client_img-box ">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                            <div class="client_detail-box">
                                <h4>
                                    <?php the_title(); ?>
                                </h4>
                                <?php
                                do_action('plugins/wp_subtitle/the_subtitle', array(
                                    'before'        => '<span>',
                                    'after'         => '</span>',
                                    'post_id'       => get_the_ID(),
                                    'default_value' => ''
                                ));
                                ?>
                            </div>
                        </div>
                        <div class="client_text mt-4">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>




<!-- client section -->

<!-- contact section -->

<section class="contact_section layout_padding-bottom">
    <div class="container">

        <h2 class="main-heading">
            Contact Now

        </h2>
        <p class="text-center">
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla

        </p>
        <div class="">
            <div class="contact_section-container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="45" title="main"]') ?>
                            <!-- <form action="">
                                <div>
                                    <input type="text" placeholder="Name">
                                </div>
                                <div>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email">
                                </div>
                                <div>
                                    <input type="text" placeholder="Message" class="input_message">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn_on-hover">
                                        Send
                                    </button>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>


<!-- end contact section -->

<!-- admission section -->
<section class="admission_section ">
    <div class="container-fluid position-relative">
        <div class="row h-100">
            <?php echo do_shortcode('[wpgmza id="1"]') ?>

        </div>
    </div>
</section>


<?php
get_footer();
?>