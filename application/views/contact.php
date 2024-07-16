<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <!--  Owl Carousel Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <!-- Title CSS -->
    <title>Credbuddha | Contact us</title>

    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
</head>

<body>

    <!-- Pre Loader CSS Start -->
    <div class="loader-content">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-ripple">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre Loader CSS End -->

    <!-- Header Section Start -->
    <!-- <header class="header-area header-style-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-9">
                        <div class="header-left-text">
                            <ul>
                                <li>
                                    <a href="tel:+0123456789">
                                        <i class="flaticon-call"></i>
                                        +0123456789
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@everb.com">
                                        <i class="flaticon-envelope"></i>
                                        info@everb.com
                                    </a>
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    28/A Street, USA
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3">
                        <div class="header-right text-end">
                            <div class="header-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="flaticon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> -->
    <!-- Header Section End -->

    <!-- Navbar Area Start -->

    <!-- navbar -->
    <div class="navbar-area navbar-style-two">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo-three.png" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?php echo base_url(); ?>assets/img/logo-two.png" alt="logo" height="60px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto" style="justify-content: center; width: 100%;">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>index.php" class="nav-link dropdown-toggle">Home</a>
                                <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link">Home Page 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-two.php" class="nav-link active">Home Page 2</a>
                                        </li>
                                    </ul> -->
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>personal" class="nav-link dropdown-toggle">
                                    Loans
                                    <i class="flaticon-right-chevron"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>personal" class="nav-link dropdown-toggle">
                                            Personal Loan
                                            <i class="flaticon-right-chevron"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>marriage" class="nav-link">Marriage Loan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>personal" class="nav-link">Personal Loan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>travel" class="nav-link">Travel Loan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>medical" class="nav-link">Medical Loan</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>business" class="nav-link">Business Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>home" class="nav-link">Home Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>car" class="nav-link">Car Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>bike" class="nav-link">Bike Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>education" class="nav-link ">Education Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>gold" class="nav-link ">gold Loan</a>
                                    </li>



                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>creditscore" class="nav-link">Free Credit score</a>

                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>about" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>bloghome" class="nav-link">Blog</a>

                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>contact" class="nav-link active">Contact Us</a>
                            </li>
                        </ul>

                        <!-- <div class="other-option">
                            <div class="search-bar">
                                <i class="flaticon-search search-icon"></i>
                                <div class="search-form">
                                    <form>
                                        <input type="text" placeholder="Search" class="search-input">
                                        <button type="submit">
                                            <i class="flaticon-search search-btn"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-toggle">
                                <button type="button" class="btn btn-demo toggle-button navbar-toggle"
                                    data-bs-toggle="modal" data-bs-target="#sidebar-right">
                                    <i class="flaticon-list"></i>
                                </button>
                            </div>
                        </div> -->
                    </div>
                    <div>
                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/google-play-badge.png" alt="store-icon" width="190px"></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar Area End -->

    <!-- Modal Start  -->
   
    <!-- Modal End -->

    <!-- Contact Title Section Start -->
    <div class="contact-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="title-text text-center">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Title Section End -->

    <!-- Contact Card Section Start -->
    <div class="contact-area">
        <div class="container">
            <div class="row contact-box">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-card">
                        <i class="flaticon-pin"></i>
                        <h3>Location</h3>
                        <ul>
                            <li>3rd Floor (South West Wing), Plot no C2, Hill No 2, Non SEZ, IT Park Rushikonda,
                                Visakhapatnam - 530048</li>
                            <!-- <li>35/C Street, USA</li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-card" style="height: 100%;">
                        <i class="flaticon-call"></i>
                        <h3>Phone</h3>
                        <ul>
                            <li>+91 9154297990</li>
                            <!-- <li>+12 5554 3732 333</li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="contact-card" style="height: 100%;">
                        <i class="flaticon-envelope"></i>
                        <h3>Email</h3>
                        <ul>
                            <li>contact@credbuddha.com</li>
                            <!-- <li>contact@everb.com</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Card Section End -->

    <!-- Contact Section Start -->
    <div class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6  p-0">
                    <img src="<?php echo base_url(); ?>assets/img/contact.svg" alt="contact">
                </div>

                <div class="col-lg-6 p-0">
                    <div class="contact-form">
                        <div class="contact-text">
                            <h3>We Love to Hear From You</h3>
                            <p>Feel free and share with us. We will get you</p>
                        </div>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="message-field" id="message" cols="30" rows="5"
                                            required data-error="Please type your message"
                                            placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn contact-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                        <img src="<?php echo base_url(); ?>assets/img/shapes/1.png" class="contact-shape" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Map Section Start -->
    <div class="map">
        <div class="container-fluid p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.400604058451!2d77.6815190148228!3d12.935204990879733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae134b6d15481b%3A0xa83b4e5a3e31ecf2!2sIndiqube%20Gamma%2C%204th%20Floor%2C%20293%2F154%2F172%2C%20Marathahalli%20-%20Sarjapur%20Outer%20Ring%20Rd%2C%20Kadubeesanahalli%2C%20Bengaluru%2C%20Karnataka%20560103!5e0!3m2!1sen!2sin!4v1625487328123!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
    <!-- Map Section End -->

    <!-- Newsletter Section Start -->
    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-area">
                <h2>Subscribe Our Newsletter</h2>
                <div class="col-lg-6 offset-lg-3 p-0">
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required
                            autocomplete="off">

                        <button class="default-btn electronics-btn" type="submit">
                            Subscribe
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <img src="<?php echo base_url(); ?>assets/img/shapes/2.png" class="subscribe-shape" alt="shape">
            </div>
        </div>
    </div>
    <!-- Newsletter Section End -->

    <!-- Footer Section Start -->
    <!--footer-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="<?php echo base_url(); ?>index.php">
                                <img src="<?php echo base_url(); ?>assets/img/logo-two.png" alt="logo" height="60px">
                            </a>
                        </div>
                        <p>Our platform encourages wise decision-making, prioritizing selections that lead to greater
                            financial success.</p>

                        <div class="footer-social">
                            <a href="#"><i class="flaticon-facebook"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                            <a href="#"><i class="flaticon-linkedin"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget pl-75">
                        <h3>Loans</h3>
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>personal">
                                    <i class="flaticon-right-chevron"></i>
                                    Personal Loan
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>business">
                                    <i class="flaticon-right-chevron"></i>
                                    Business Loan
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>car">
                                    <i class="flaticon-right-chevron"></i>
                                    Car Loan
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>bike">
                                    <i class="flaticon-right-chevron"></i>
                                    Bike Loan
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>home">
                                    <i class="flaticon-right-chevron"></i>
                                    Home Loan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget pl-75">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>index">
                                    <i class="flaticon-right-chevron"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>loans">
                                    <i class="flaticon-right-chevron"></i>
                                    Loans
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>credit">
                                    <i class="flaticon-right-chevron"></i>
                                    Free Credit Score
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>about">
                                    <i class="flaticon-right-chevron"></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>bloghome">
                                    <i class="flaticon-right-chevron"></i>
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>contact">
                                    <i class="flaticon-right-chevron"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 lh-1 text-left">
                        <p>Credbuddha. All Rights Powered by <a href="https://intexmmedia.com/" rel="noopener"
                                target="_blank">Intexm
                                Media</a></p>
                    </div>
                    <div class="col-md-6 lh-1 text-end">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>privacy">Privacy Policy</a></li>
                            <li><a href="<?php echo base_url();?>terms">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Jquery JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Subscribe From JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="<?php echo base_url(); ?>assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="<?php echo base_url(); ?>assets/js/contact-form-script.js"></script>
    <!-- Owl Carousel Slider JS -->
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Mixit Up JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="<?php echo base_url(); ?>assets/js/meanmenu.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>