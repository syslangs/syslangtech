    <?php
    include("./backend/config/init.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <?php include('./includes/head.php'); ?>
        <!-- Main CSS File -->
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
        <title>Porto - Bootstrap eCommerce Template</title>
    </head>

    <body>
        <div class="page-wrapper">

            <?php include("./includes/header.php") ?>

            <main class="main">
                <div class="category-banner-container bg-gray mb-5">
                    <div class="category-banner banner text-uppercase"
                        style="background: no-repeat 60%/cover url('assets/images/banners/banner-top.jpg');">
                        <div class="container position-relative">
                            <div class="row">
                                <div class="pl-lg-5 pb-5 pb-md-0 col-sm-5 col-xl-4 col-lg-4 offset-1">
                                    <h3>Electronic<br>Deals</h3>
                                    <a href="category.php" class="btn btn-dark">Get Yours!</a>
                                </div>
                                <div class="pl-lg-3 col-sm-4 offset-sm-0 offset-1 pt-3">
                                    <div class="coupon-sale-content">
                                        <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                                        </h4>
                                        <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b
                                                class="text-dark">$100</b> OFF</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container contact-us-container">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="ls-n-25 m-b-1">
                                    Contact Info
                                </h2>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed imperdiet libero id nisi euismod, sed
                                    porta est consectetur. Vestibulum auctor felis eget
                                    orci semper vestibulum. Pellentesque ultricies nibh
                                    gravida, accumsan libero luctus, molestie nunc.L
                                    orem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box text-center">
                                    <i class="sicon-location-pin"></i>
                                    <div class="feature-box-content">
                                        <h3>Address</h3>
                                        <h5>123 Wall Street, New York / NY</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box text-center">
                                    <i class="fa fa-mobile-alt"></i>
                                    <div class="feature-box-content">
                                        <h3>Phone Number</h3>
                                        <h5>(800) 123-4567</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box text-center">
                                    <i class="far fa-envelope"></i>
                                    <div class="feature-box-content">
                                        <h3>E-mail Address</h3>
                                        <h5><a href="https://portotheme.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="2f5f405d5b406f5f405d5b405b474a424a014c4042">[email&#160;protected]</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box text-center">
                                    <i class="far fa-calendar-alt"></i>
                                    <div class="feature-box-content">
                                        <h3>Working Days/Hours</h3>
                                        <h5>Mon - Sun / 9:00AM - 8:00PM</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="mt-6 mb-2">Send Us a Message</h2>

                            <form class="mb-0" action="#">
                                <div class="form-group">
                                    <label class="mb-1" for="contact-name">Your Name
                                        <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="contact-name" name="contact-name"
                                        required />
                                </div>

                                <div class="form-group">
                                    <label class="mb-1" for="contact-email">Your E-mail
                                        <span class="required">*</span></label>
                                    <input type="email" class="form-control" id="contact-email" name="contact-email"
                                        required />
                                </div>

                                <div class="form-group">
                                    <label class="mb-1" for="contact-message">Your Message
                                        <span class="required">*</span></label>
                                    <textarea cols="30" rows="1" id="contact-message" class="form-control"
                                        name="contact-message" required></textarea>
                                </div>

                                <div class="form-footer mb-0">
                                    <button type="submit" class="btn btn-dark font-weight-normal">
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6">
                            <h2 class="mt-6 mb-1">Frequently Asked Questions</h2>
                            <div id="accordion">
                                <div class="card card-accordion">
                                    <a class="card-header" href="#" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Curabitur eget leo at velit imperdiet viaculis
                                        vitaes?
                                    </a>

                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Curabitur eget leo at velit
                                            imperdiet varius. In eu ipsum vitae velit
                                            congue iaculis vitae at risus. Nullam tortor
                                            nunc, bibendum vitae semper a, volutpat eget
                                            massa.</p>
                                    </div>
                                </div>

                                <div class="card card-accordion">
                                    <a class="card-header collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                        Curabitur eget leo at velit imperdiet vague
                                        iaculis vitaes?
                                    </a>

                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Curabitur eget leo at velit
                                            imperdiet varius. In eu ipsum vitae velit
                                            congue iaculis vitae at risus. Nullam tortor
                                            nunc, bibendum vitae semper a, volutpat eget
                                            massa. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Integer
                                            fringilla, orci sit amet posuere auctor,
                                            orci eros pellentesque odio, nec
                                            pellentesque erat ligula nec massa. Aenean
                                            consequat lorem ut felis ullamcorper posuere
                                            gravida tellus faucibus. Maecenas dolor
                                            elit, pulvinar eu vehicula eu, consequat et
                                            lacus. Duis et purus ipsum. In auctor mattis
                                            ipsum id molestie. Donec risus nulla,
                                            fringilla a rhoncus vitae, semper a massa.
                                            Vivamus ullamcorper, enim sit amet consequat
                                            laoreet, tortor tortor dictum urna, ut
                                            egestas urna ipsum nec libero. Nulla justo
                                            leo, molestie vel tempor nec, egestas at
                                            massa. Aenean pulvinar, felis porttitor
                                            iaculis pulvinar, odio orci sodales odio, ac
                                            pulvinar felis quam sit.</p>
                                    </div>
                                </div>

                                <div class="card card-accordion">
                                    <a class="card-header collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        Curabitur eget leo at velit imperdiet viaculis
                                        vitaes?
                                    </a>

                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Curabitur eget leo at velit
                                            imperdiet varius. In eu ipsum vitae velit
                                            congue iaculis vitae at risus. Nullam tortor
                                            nunc, bibendum vitae semper a, volutpat eget
                                            massa.</p>
                                    </div>
                                </div>

                                <div class="card card-accordion">
                                    <a class="card-header collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
                                        Curabitur eget leo at velit imperdiet vague
                                        iaculis vitaes?
                                    </a>

                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Curabitur eget leo at velit
                                            imperdiet varius. In eu ipsum vitae velit
                                            congue iaculis vitae at risus. Nullam tortor
                                            nunc, bibendum vitae semper a, volutpat eget
                                            massa. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Integer
                                            fringilla, orci sit amet posuere auctor,
                                            orci eros pellentesque odio, nec
                                            pellentesque erat ligula nec massa. Aenean
                                            consequat lorem ut felis ullamcorper posuere
                                            gravida tellus faucibus. Maecenas dolor
                                            elit, pulvinar eu vehicula eu, consequat et
                                            lacus. Duis et purus ipsum. In auctor mattis
                                            ipsum id molestie. Donec risus nulla,
                                            fringilla a rhoncus vitae, semper a massa.
                                            Vivamus ullamcorper, enim sit amet consequat
                                            laoreet, tortor tortor dictum urna, ut
                                            egestas urna ipsum nec libero. Nulla justo
                                            leo, molestie vel tempor nec, egestas at
                                            massa. Aenean pulvinar, felis porttitor
                                            iaculis pulvinar, odio orci sodales odio, ac
                                            pulvinar felis quam sit.</p>
                                    </div>
                                </div>

                                <div class="card card-accordion">
                                    <a class="card-header collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
                                        Curabitur eget leo at velit imperdiet varius
                                        iaculis vitaes?
                                    </a>

                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Curabitur eget leo at velit
                                            imperdiet varius. In eu ipsum vitae velit
                                            congue iaculis vitae at risus. Nullam tortor
                                            nunc, bibendum vitae semper a, volutpat eget
                                            massa. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Integer
                                            fringilla, orci sit amet posuere auctor,
                                            orci eros pellentesque odio, nec
                                            pellentesque erat ligula nec massa. Aenean
                                            consequat lorem ut felis ullamcorper posuere
                                            gravida tellus faucibus. Maecenas dolor
                                            elit, pulvinar eu vehicula eu, consequat et
                                            lacus. Duis et purus ipsum. In auctor mattis
                                            ipsum id molestie. Donec risus nulla,
                                            fringilla a rhoncus vitae, semper a massa.
                                            Vivamus ullamcorper, enim sit amet consequat
                                            laoreet, tortor tortor dictum urna, ut
                                            egestas urna ipsum nec libero. Nulla justo
                                            leo, molestie vel tempor nec, egestas at
                                            massa. Aenean pulvinar, felis porttitor
                                            iaculis pulvinar, odio orci sodales odio, ac
                                            pulvinar felis quam sit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-8"></div>
            </main>
            <!-- End .main -->

            <?php include("./includes/footer.php") ?>
            <!-- End .footer -->
        </div>
        <!-- End .page-wrapper -->

        <!-- <div class="loading-overlay">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div> -->


        <?php
        include("./includes/mobile-view.php")
        ?>



        <!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
            <div class="newsletter-popup-content">
                <img src="assets/images/logo.png" width="111" height="44" alt="Logo" class="logo-newsletter">
                <h2>Subscribe to newsletter</h2>

                <p>
                    Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
                </p>

                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </form>
                <div class="newsletter-subscribe">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                        <label for="show-again" class="custom-control-label">
                            Don't show this popup again
                        </label>
                    </div>
                </div>
            </div>

            <button title="Close (Esc)" type="button" class="mfp-close">
                ×
            </button>
        </div> -->
        <!-- End .newsletter-popup -->

        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>


        <?php
        include("./includes/scripts.php");
        ?>
    </body>

    </html>