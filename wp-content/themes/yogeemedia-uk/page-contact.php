<?php
/* Template Name: Contact Page */
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
                            <li class="active">Contact</li>
                        </ol>
                    </nav>
                    <h1>Get in touch with us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Us 
    ============================================= -->
<div class="contact-area contact-page overflow-hidden default-padding">
    <div class="container">
        <div class="map default-padding-bottom">
            <iframe style="filter: invert(93.5%)" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.307210086189!2d79.99224377612836!3d7.090342716314407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fbed59abfe0b%3A0x156c4d8153c22b78!2sYogee%20Media%20(Pvt)%20Ltd.!5e0!3m2!1sen!2slk!4v1695284265898!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">


            <div class="col-tact-stye-one col-lg-5 pr-50 pr-md-15 pr-xs-15">
                <div class="contact-style-one-info">
                    <ul class="contact-address bg-dark text-light" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/globe.png);">
                        <li>
                            <a class="phone-link" href="tel:+4733378901">+4733378901</a>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Location</h4>
                                <p>
                                    55 Main Street, The Grand Avenue <br> 2nd Block, New York City
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Official Email</h4>
                                <a href="mailto:info@digital.com.com">info@digital.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <ul class="social-link">
                                    <li>
                                        <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-tact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15 mt-md-50 mt-xs-50">
                <div class="contact-form-style-one">
                    <h4 class="sub-title">Have Questions?</h4>
                    <h2 class="title">Send us a Massage</h2>
                    <form action="<?php echo get_template_directory_uri(); ?>/assets/mail/contact.php" method="POST" class="contact-form contact-form mt-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    <i class="fa fa-paper-plane"></i> Get in Touch
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact -->

<?php
get_footer();
