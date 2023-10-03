<?php

/**
 * Single Template for Services
 */
get_header();
?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-item">
            <div class="breadcrum-shape">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/bg-shape-3.png" alt="shape">
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Service</li>
                        </ol>
                    </nav>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Star Services Details Area
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">

                <div class="col-xl-8 col-lg-7 pr-45 pr-md-15 pr-xs-15 services-single-content">
                    <div class="service-single-thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid w-100', 'alt' => get_the_title())); ?>
                        <?php endif; ?>
                    </div>
                    <h2>Best influencer marketing services</h2>
                    <p>
                    <?php the_content(); ?>
                    </p>
                    <div class="features mt-40 mt-xs-30">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="content">
                                    <h3>Included Services</h3>
                                    <ul class="feature-list-item">
                                        <li>Monthly SEO Task</li>
                                        <li>24/7 Alltime Supporting</li>
                                        <li>Turbo Boosting</li>
                                        <li>Expert Team Members</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 mt-xs-30">
                                <div class="content">
                                    <h3>The Challange</h3>
                                    <p>
                                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                        saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                                        voluptatibus maiores alias. consequatur aut perferendis doloribus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 mt-md-50 mt-xs-50 pl-30 pl-md-15 pl-xs-15 services-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget services-list-widget">
                        <h4 class="widget-title">Services</h4>
                        <ul>

                            <?php
                            // WP Query to fetch services
                            $args = array(
                                'post_type' => 'service', // Assuming 'services' is the name of your custom post type
                                'posts_per_page' => -1, // Adjust the number of posts to display
                            );

                            $services_query = new WP_Query($args);

                            // Loop through services
                            while ($services_query->have_posts()) :
                                $services_query->the_post();
                            ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="fas fa-arrow-right"></i></a></li>
                            <?php
                            endwhile;
                            wp_reset_postdata(); // Reset the query to the main loop
                            ?>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->

<?php
get_footer();
