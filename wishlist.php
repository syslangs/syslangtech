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
                <div class="page-header">
                    <div class="container d-flex flex-column align-items-center">
                        <nav aria-label="breadcrumb" class="breadcrumb-nav">
                            <div class="container">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="demo4.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Wishlist
                                    </li>
                                </ol>
                            </div>
                        </nav>

                        <h1>Wishlist</h1>
                    </div>
                </div>

                <div class="container">
                    <div class="wishlist-title">
                        <h2 class="p-2">My wishlist on Porto Shop 4</h2>
                    </div>
                    <div class="wishlist-table-container">
                        <table class="table table-wishlist mb-0">
                            <thead>
                                <tr>
                                    <th class="thumbnail-col"></th>
                                    <th class="product-col">Product</th>
                                    <th class="price-col">Price</th>
                                    <th class="status-col">Stock Status</th>
                                    <th class="action-col">Actions</th>
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
                                    <td>
                                        <h5 class="product-title">
                                            <a href="product.php">Men Watch</a>
                                        </h5>
                                    </td>
                                    <td class="price-box">$17.90</td>
                                    <td>
                                        <span class="stock-status">In stock</span>
                                    </td>
                                    <td class="action">
                                        <a href="ajax/product-quick-view.php" class="btn btn-quickview mt-1 mt-md-0"
                                            title="Quick View">Quick
                                            View</a>
                                        <button class="btn btn-dark btn-add-cart product-type-simple btn-shop">
                                            ADD TO CART
                                        </button>
                                    </td>
                                </tr>

                                <tr class="product-row">
                                    <td>
                                        <figure class="product-image-container">
                                            <a href="product.php" class="product-image">
                                                <img src="assets/images/products/product-5.jpg" alt="product">
                                            </a>

                                            <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                        </figure>
                                    </td>
                                    <td>
                                        <h5 class="product-title">
                                            <a href="product.php">Men Cap</a>
                                        </h5>
                                    </td>
                                    <td class="price-box">$17.90</td>
                                    <td>
                                        <span class="stock-status">In stock</span>
                                    </td>
                                    <td class="action">
                                        <a href="ajax/product-quick-view.php" class="btn btn-quickview mt-1 mt-md-0"
                                            title="Quick View">Quick
                                            View</a>
                                        <a href="product.php" class="btn btn-dark btn-add-cart btn-shop">
                                            SELECT OPTION
                                        </a>
                                    </td>
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
                                    <td>
                                        <h5 class="product-title">
                                            <a href="product.php">Men Black Gentle Belt</a>
                                        </h5>
                                    </td>
                                    <td class="price-box">$17.90</td>
                                    <td>
                                        <span class="stock-status">In stock</span>
                                    </td>
                                    <td class="action">
                                        <a href="ajax/product-quick-view.php" class="btn btn-quickview mt-1 mt-md-0"
                                            title="Quick View">Quick
                                            View</a>
                                        <a href="product.php" class="btn btn-dark btn-add-cart btn-shop">
                                            SELECT OPTION
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- End .cart-table-container -->
                </div><!-- End .container -->
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