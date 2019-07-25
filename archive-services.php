<?php get_header(); ?>
<!-- Content -->
<div class="wrap">
    <section class="content">

        <h2><?php _e('Services');?></h2>

        <?php echo get_breadcrumbs();?>

        <div class="text">
            <p>
                <?php echo ale_get_option('service_description');?>
            </p>
        </div>

        <!-- # # # # # # # # -->
        <div class="tiles cf">
            <?php global $query_string;
            query_posts($query_string.'&post_per_page-1');
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <div class="col-6 airport cf">
                    <div class="col-6 img">
                        <!--<img src="http://placehold.it/240x240/fcf8eb/" alt=""/>-->
                        <?php echo get_the_post_thumbnail();?>
                    </div>
                    <div class="col-6 txt left">
                        <h3><?php echo the_title();?></h3>
                        <p>
                            <?php echo the_excerpt($post->ID,'services-mini');?>
                        </p>
                    </div>
                </div>
            <?php endwhile;?>
            <?php endif;?>
            <!--<div class="col-6 airport cf">
                <div class="col-6 img">
                    <img src="http://placehold.it/240x240/fcf8eb/" alt=""/>
                </div>
                <div class="col-6 txt left">
                    <h3>Airport Meeting</h3>
                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>
            <div class="col-6 retro cf">
                <div class="col-6 img">
                    <img src="http://placehold.it/240x240/fcf8eb" alt=""/>
                </div>
                <div class="col-6 txt left">
                    <h3>Retro Cab</h3>
                    <p>
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page when looking
                        at its layout.
                    </p>
                </div>
            </div>
            <div class="col-6 vip cf">
                <div class="col-6 txt right">
                    <h3>VIP Taxi</h3>
                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="col-6 img">
                    <img src="http://placehold.it/240x240/fcf8eb" alt=""/>
                </div>
            </div>
            <div class="col-6 truck cf">
                <div class="col-6 txt right">
                    <h3>Truck</h3>
                    <p>
                        It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="col-6 img">
                    <img src="http://placehold.it/240x240/fcf8eb" alt=""/>
                </div>
            </div>-->
        </div>


    </section>
</div>

<?php get_footer(); ?>
