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
        <title>Porto - Bootstrap eCommerce Template</title>
    </head>

    <body>
        <div class="page-wrapper">

            <?php include("./includes/header.php") ?>


            <main class="main">
                <div class="container">
                    <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                        <li class="active">
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Checkout</a>
                        </li>
                        <li class="disabled">
                            <a href="cart.php">Order Complete</a>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-table-container">
                                <table class="table table-cart">
                                    <thead>
                                        <tr>
                                            <th class="thumbnail-col"></th>
                                            <th class="product-col">Product</th>
                                            <th class="price-col">Price</th>
                                            <th class="qty-col">Quantity</th>
                                            <th class="text-right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-row">
                                            <td>
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                                    </a>

                                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                                </figure>
                                            </td>
                                            <td class="product-col">
                                                <h5 class="product-title">
                                                    <a href="product.php">Men Watch</a>
                                                </h5>
                                            </td>
                                            <td>$17.90</td>
                                            <td>
                                                <div class="product-single-qty">
                                                    <input class="horizontal-quantity form-control" type="text">
                                                </div><!-- End .product-single-qty -->
                                            </td>
                                            <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                                        </tr>

                                        <tr class="product-row">
                                            <td>
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                                    </a>

                                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                                </figure>
                                            </td>
                                            <td class="product-col">
                                                <h5 class="product-title">
                                                    <a href="product.php">Men Watch</a>
                                                </h5>
                                            </td>
                                            <td>$17.90</td>
                                            <td>
                                                <div class="product-single-qty">
                                                    <input class="horizontal-quantity form-control" type="text">
                                                </div><!-- End .product-single-qty -->
                                            </td>
                                            <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                                        </tr>

                                        <tr class="product-row">
                                            <td>
                                                <figure class="product-image-container">
                                                    <a href="product.php" class="product-image">
                                                        <img src="assets/images/products/product-6.jpg" alt="product">
                                                    </a>

                                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                                </figure>
                                            </td>
                                            <td class="product-col">
                                                <h5 class="product-title">
                                                    <a href="product.php">Men Black Gentle Belt</a>
                                                </h5>
                                            </td>
                                            <td>$17.90</td>
                                            <td>
                                                <div class="product-single-qty">
                                                    <input class="horizontal-quantity form-control" type="text">
                                                </div><!-- End .product-single-qty -->
                                            </td>
                                            <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                                        </tr>
                                    </tbody>


                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="clearfix">
                                                <div class="float-left">
                                                    <div class="cart-discount">
                                                        <form action="#">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control form-control-sm"
                                                                    placeholder="Coupon Code" required>
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-sm" type="submit">Apply
                                                                        Coupon</button>
                                                                </div>
                                                            </div><!-- End .input-group -->
                                                        </form>
                                                    </div>
                                                </div><!-- End .float-left -->

                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-shop btn-update-cart">
                                                        Update Cart
                                                    </button>
                                                </div><!-- End .float-right -->
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- End .cart-table-container -->
                        </div><!-- End .col-lg-8 -->

                        <div class="col-lg-4">
                            <div class="cart-summary">
                                <h3>CART TOTALS</h3>

                                <table class="table table-totals">
                                    <tbody>
                                        <tr>
                                            <td>Subtotal</td>
                                            <td>$17.90</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="text-left">
                                                <h4>Shipping</h4>

                                                <div class="form-group form-group-custom-control">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="radio"
                                                            checked>
                                                        <label class="custom-control-label">Local pickup</label>
                                                    </div><!-- End .custom-checkbox -->
                                                </div><!-- End .form-group -->

                                                <div class="form-group form-group-custom-control mb-0">
                                                    <div class="custom-control custom-radio mb-0">
                                                        <input type="radio" name="radio" class="custom-control-input">
                                                        <label class="custom-control-label">Flat rate</label>
                                                    </div><!-- End .custom-checkbox -->
                                                </div><!-- End .form-group -->

                                                <form action="#">
                                                    <div class="form-group form-group-sm">
                                                        <label>Shipping to <strong>NY.</strong></label>
                                                        <div class="select-custom">
                                                            <select class="form-control form-control-sm">
                                                                <option value="USA">United States (US)</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="China">China</option>
                                                                <option value="Germany">Germany</option>
                                                            </select>
                                                        </div><!-- End .select-custom -->
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group form-group-sm">
                                                        <div class="select-custom">
                                                            <select class="form-control form-control-sm">
                                                                <option value="NY">New York</option>
                                                                <option value="CA">California</option>
                                                                <option value="TX">Texas</option>
                                                            </select>
                                                        </div><!-- End .select-custom -->
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group form-group-sm">
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Town / City">
                                                    </div><!-- End .form-group -->

                                                    <div class="form-group form-group-sm">
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="ZIP">
                                                    </div><!-- End .form-group -->

                                                    <button type="submit" class="btn btn-shop btn-update-total">
                                                        Update Totals
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td>Total</td>
                                            <td>$17.90</td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="checkout-methods">
                                    <a href="cart.php" class="btn btn-block btn-dark">Proceed to Checkout
                                        <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div><!-- End .cart-summary -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-6"></div><!-- margin -->
            </main><!-- End .main -->
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