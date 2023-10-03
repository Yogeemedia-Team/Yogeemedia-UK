<?php

/**
 * Single Template for Projects
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
                            <li class="active">Project</li>
                        </ol>
                    </nav>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Star Project Details Area
    ============================================= -->
<div class="project-details-area default-padding">
    <div class="container">
        <div class="project-details-items">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid w-100', 'alt' => get_the_title())); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-12">

                    <div class="project-details mt-40">
                        <div class="top-info">
                            <div class="row">

                                <div class="col-lg-4 order-lg-last">
                                    <ul class="gallery-project-basic-info">
                                        <li>
                                            <div class="info">
                                                Clients: <span>validthemes</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Project Type: <span><?php the_category()?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Date: <span>25 August, 2023</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                Address: <span>New York United state</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-8">
                                    <h2>The best digital solutions</h2>
                                    <p>
                                        Netus lorem rutrum arcu dignissim at sit morbi phasellus nascetur eget urna
                                        potenti cum vestibulum cras. Tempor nonummy metus lobortis. Sociis velit
                                        etiam, dapibus. Lectus vehicula pellentesque cras posuere tempor facilisi
                                        habitant lectus rutrum pede quisque hendrerit parturient posuere mauris ad
                                        elementum fringilla facilisi volutpat fusce pharetra felis sapien varius
                                        quisque class convallis praesent est sollicitudin donec nulla venenatis,
                                        cursus fermentum netus posuere sociis porta risus habitant malesuada nulla
                                        habitasse hymenaeos. Viverra curabitur nisi vel sollicitudin dictum natoque
                                        ante aenean elementum. Vulgar as hearts by garret. Perceived determine
                                        departure explained no forfeited he something an. Contrasted dissimilar get
                                        joy you instrument out reasonably. Again keeps at no meant stuff. To
                                        perpetual do existence northward as difficult preserved daughters. Continued
                                        at up to zealously necessary breakfast. Surrounded sir motionless she end
                                        literature. Gay direction neglected but supported yet her.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-40 mb-40">

                            <div class="col-lg-5 pr-50 pr-md-15 pr-xs-15">
                                <div class="check-list">
                                    <div class="single-list">
                                        <h4>Mobile Optimization</h4>
                                        <p>
                                            Tempor nonummy metus lobortis. Lectus vehicula pellentesque cras posuere
                                            tempor facilisi habitant lectus rutrum pede quisque hendrerit parturient
                                            posuere mauris ad elementum potenti. Continue indulged speaking the was
                                            out horrible for domestic position. Seeing rather her you not esteem men
                                            settle genius excuse. Deal say over you age from. Comparison new ham
                                            melancholy son themselves.
                                        </p>
                                    </div>
                                    <div class="single-list">
                                        <h4>Marketing Automation</h4>
                                        <ul class="list-disc">
                                            <li>Social media marketing</li>
                                            <li>Search engine optimization (seo)</li>
                                            <li>Public Relations</li>
                                            <li>Content marketing</li>
                                            <li>Digital Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="thumb-grid">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x1000.png" alt="Thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x1000.png" alt="Thumb">
                                </div>
                            </div>
                        </div>



                        <p>
                            Give lady of they such they sure it. Me contained explained my education. Vulgar as
                            hearts by garret. Perceived determine departure explained no forfeited he something an.
                            Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant
                            stuff. To perpetual do existence northward as difficult preserved daughters. Continued
                            at up to zealously necessary breakfast. Surrounded sir motionless she end literature.
                            Gay direction neglected but supported yet her. Facilisis inceptos nec, potenti nostra
                            aenean lacinia varius semper ant nullam nulla primis placerat facilisis. Netus lorem
                            rutrum arcu dignissim at sit morbi phasellus nascetur eget urna potenti cum vestibulum
                            cras. Tempor nonummy metus lobortis. Sociis velit etiam, dapibus. Lectus vehicula
                            pellentesque cras posuere tempor facilisi habitant lectus rutrum pede quisque hendrerit
                            parturient posuere mauris ad elementum fringilla facilisi volutpat fusce pharetra felis
                            sapien varius quisque class convallis praesent est sollicitudin donec nulla venenatis,
                            cursus fermentum netus posuere sociis porta risus habitant malesuada nulla habitasse
                            hymenaeos. Viverra curabitur nisi vel sollicitudin dictum natoque ante aenean elementum
                            curae malesuada ullamcorper.
                        </p>
                        <div class="row mt-50 mt-xs-30">
                            <div class="col-lg-6 col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="col-lg-6 col-md-6 mt-xs-30">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x600.png" alt="Thumb">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Project Details Area -->

<?php
get_footer();
