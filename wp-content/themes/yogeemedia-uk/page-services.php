<?php 
/* Template Name: Services Page */ 
get_header();
?>

  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-item pb-120">
                <div class="breadcrum-shape">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/bg-shape-3.png" alt="shape">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Services</li>
                            </ol>
                        </nav>
                        <h1>Popular Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
    ============================================= -->
    <div class="creative-services-area overflow-hidden bg-gray default-padding-bottom">

        <div class="bg-static">
            <img class="bg-move" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.png" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h4 class="sub-title d-block text-center">Services We Offer</h4>
                        <h2 class="title text-center">Turn Information <br> Into Actionable Insights</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <!-- Single Item -->
                    <div class="cteative-service-item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/1.png" alt="Icon">
                        <h4><a href="services-details.html">Website Design & Development</a></h4>
                        <p>
                            Our in-house web design team elevates your digital presence. We cover business websites, e-commerce, brochures, and revamps.we collaborate closely to bring your vision to life.
                        </p>
                        <span>01</span>
                    </div>
                    <!-- End Single Item -->
                </div>
                <div class="col-md-4">
                    <div class="cteative-service-item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/3.png" alt="Icon">
                        <h4><a href="services-details.html">Search Engine Optimisation</a></h4>
                        <p>
                            Our SEO experts use industry-standard methods like link building, inbound marketing, and on-page SEO to elevate your digital presence. Unleash your online potential with our limitless creative expertise.
                        </p>
                        <span>02</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cteative-service-item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/4.png" alt="Icon">
                        <h4><a href="services-details.html">Ecommerce Website Design</a></h4>
                        <p>
                            Embark on your online selling journey with us! We craft dynamic e-commerce solutions for businesses of all sizes. Our meticulously designed websites provide effortless store control. Join us for seamless selling.
                        </p>
                        <span>03</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cteative-service-item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/4.png" alt="Icon">
                        <h4><a href="services-details.html">Web Systems</a></h4>
                        <p>
                            Streamline Business Processes with Dynamic Web Solutions. User-Friendly CMS, Robust CRM. Tailored Systems for Unique Needs. Expertly Designed, Meticulously Developed. Discover Seamless Control and Optimal Visibility.
                        </p>
                        <span>04</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cteative-service-item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/4.png" alt="Icon">
                        <h4><a href="services-details.html">Mobile Apps</a></h4>
                        <p>
                            Mobile App Development Experts. User-Friendly Applications. Customized Solutions. Expert Design, Meticulous Development. Superior Visibility, Seamless Experiences. Discover Mobile Excellence with Us.
                        </p>
                        <span>05</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cteative-service-item text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/4.png" alt="Icon">
                        <h4><a href="services-details.html">Web Design Services</a></h4>
                        <p>
                            Your Comprehensive Web Development Solution. From Simple Websites to Custom Platforms and Extensive Corporate Redesigns, We've Got You Covered. A Wide Range of Services for Your Needs.
                        </p>
                        <span>06</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="faq-style-one faq-style-two mt-40">
                    <h2 class="mb-30">Any Questions find here.</h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Business Innovation
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Bennings appetite disposed me an at subjects an. To no indulgence diminution
                                        so discovered mr apartments. Are off under folly death wrote cause her way
                                        spite. Plan upon yet way.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Search Engine Optimization
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Cennings appetite disposed me an at subjects an. To no indulgence diminution
                                        so discovered mr apartments. Are off under folly death wrote cause her way
                                        spite. Plan upon yet way.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Thinking Differently
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tennings appetite disposed me an at subjects an. To no indulgence diminution
                                        so discovered mr apartments. Are off under folly death wrote cause her way
                                        spite. Plan upon yet way.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

<?php
get_footer();