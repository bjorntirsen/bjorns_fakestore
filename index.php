<?php 
include_once 'App.php';
$grouped_array = App::getGroupedArray();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Björn's Fakestore!</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-xl bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Björn's Fakestore!</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#page-top">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#womensclothing">Women's clothing</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#mensclothing">Men's clothing</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#jewelery">Jewelery</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
                <!-- Masthead Heading-->
                <p class="masthead-subheading font-weight-light mb-0">Welcome to</p>
                <h1 class="masthead-heading text-uppercase mb-0">Björn's Fakestore!</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
        </header>
        <!-- Selection Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Selection Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Shop for:</h2>
                <!-- Selection Grid Items-->
                <div class="row justify-content-center">
                    <!-- Item 1-->
                    <a href="#womensclothing" class="col-md-6 col-lg-4 mb-5 js-scroll-trigger">
                        <div class="portfolio-item mx-auto">
                            <h3 class="text-center text-uppercase text-secondary">Women's clothing</h3>
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="limit-img img-fluid" src="https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg" alt="BIYLACLESEN Women's 3-in-1 Snowboard Jacket Winter Coats" />
                        </div>
                    </a>
                    <!-- Item 2-->
                    <a href="#mensclothing" class="col-md-6 col-lg-4 mb-5 js-scroll-trigger">
                        <div class="portfolio-item mx-auto">
                            <h3 class="text-center text-uppercase text-secondary">Men's clothing</h3>
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="limit-img img-fluid" src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" alt="Fjallraven - Foldsack No. 1 Backpack" />
                        </div>
                    </a>
                    <!-- Item 3-->
                    <a href="#jewelery" class="col-md-6 col-lg-4 mb-5 js-scroll-trigger">
                        <div class="portfolio-item mx-auto">
                            <h3 class="text-center text-uppercase text-secondary">Jewelery</h3>
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="limit-img img-fluid" src="https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg" alt="Gold & Silver Dragon" />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Women's clothing Section -->
        <section class="page-section bg-primary mb-0" id="womensclothing">
            <div class="container">
                <!-- Women's clothing Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Women's clothing</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Women's clothing Section Content-->
                <div class="text-black row d-flex justify-content-center">
                    <?php App::renderProductCards($grouped_array['women\'s clothing']); ?>
                </div>
            </div>
        </section>
        <!-- Men's clothing Section -->
        <section class="page-section" id="mensclothing">
            <div class="container">
                <!-- Men's clothing Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Men's clothing</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Men's clothing Section Content-->
                <div class="text-black row d-flex justify-content-center">
                    <?php App::renderProductCards($grouped_array['men\'s clothing']); ?>
                </div>
            </div>
        </section>
        <!-- Jewelery Section -->
        <section class="page-section jewelery-section" id="jewelery">
            <div class="container">
                <!-- Jewelery Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Jewelery</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Jewelery Section Content-->
                <div class="text-black row d-flex justify-content-center">
                    <?php App::renderProductCards($grouped_array['jewelery']); ?>
                </div>
            </div>
        </section>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Björn Tirsén 2021</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
