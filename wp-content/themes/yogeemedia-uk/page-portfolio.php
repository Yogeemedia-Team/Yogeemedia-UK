<?php 
/* Template Name: Portfolio Page */ 
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
                                <li class="active">Case Studies</li>
                            </ol>
                        </nav>
                        <h1>Take a look some of <br> our recent case studies</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio 
    ============================================= -->
    <div class="portfolio-style-one-area default-padding">
        <div class="container">
            <div class="row mt--50">
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInUp">
                        <div class="thumb-zoom">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Marketing</span>
                                <h2><a href="portfolio-details.html">Photo shooting and editing</a></h2>
                            </div>
                            <div class="button">
                                <a href="portfolio-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInDown" data-duration="1.5s">
                        <div class="thumb-zoom">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x600.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Creative</span>
                                <h2><a href="portfolio-details.html">Quality in industrial design</a></h2>
                            </div>
                            <div class="button">
                                <a href="portfolio-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInUp" data-duration="2s">
                        <div class="thumb-zoom">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Design</span>
                                <h2><a href="portfolio-details.html">Blue business mockup cards</a></h2>
                            </div>
                            <div class="button">
                                <a href="portfolio-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInDown" data-duration="2.5s">
                        <div class="thumb-zoom">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x600.png" alt="Image Not Found">
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <span>Business</span>
                                <h2><a href="portfolio-details.html">Simple black & white design </a></h2>
                            </div>
                            <div class="button">
                                <a href="portfolio-details.html" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

<?php
get_footer();