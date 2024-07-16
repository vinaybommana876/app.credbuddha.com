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
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <!-- Title CSS -->
    <title>Cred buddha - Home page</title>

    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <style>
        .service-btn {
            font-size: 16px;
            font-weight: 600;
            color: #FFFFFF;
            background-color: #FFBA07;
            padding: 8px 48px;
            position: relative;
            display: inline-block;
        }

        @media only screen and (max-width: 768px) {

            /* Hide the body content for screens smaller than 768px */
            .store-icon {
                width: 150px;

            }
        }
    </style>
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
                    <div class="col-lg-7 col-sm-9">
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
                    <div class="col-lg-5 col-sm-3">
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
                                        <a href="#"><i class="flaticon-instagram"></i></a>
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
    <div class="navbar-area navbar-style-two">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="<?php echo base_url(); ?>index.php" class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo-three.png" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php">
                        <img src="<?php echo base_url('assets/img/logo-two.png'); ?>" alt="logo" height="60px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto" style="justify-content: center; width: 100%;">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>" class="nav-link dropdown-toggle active">Home</a>
                                <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href=" class="nav-link">Home Page 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-two.php" class="nav-link active">Home Page 2</a>
                                        </li>
                                    </ul> -->
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link dropdown-toggle">
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
                                <a href="<?php echo base_url(); ?>contact" class="nav-link">Contact Us</a>
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

    <!-- Banner Section Start -->
    <div class="main-banner banner-style-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="banner-text">
                                <h1>Empowering Financial
                                    Enlightenment
                                    CredBuddha</h1>
                                <p>Your trusted financial companion, offering guidance and tools for success.
                                    Take control of your journey to financial empowerment today.</p>

                                <div class="theme-button d-flex align-items-center ">
                                    <a href="<?php echo base_url(); ?>form" class="default-btn">Apply Now</a>
                                    <a href="#" class="video-btn popup-vimeo ">

                                        <img src="<?php echo base_url(); ?>assets/img/google-play-badge.png" alt="Download" width="200px"
                                            class="mx-1 store-icon">

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="banner-image">  
                                <img src="<?php echo base_url(); ?>assets/img/banner/2.png" alt="banner image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="particles-js"></div>
    </div>
    <!-- Banner Section End -->

    <!-- Feature Section Start -->
    <section class="features-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Oue Services</span>
                <h2>Our Best Services</h2>
                <p>All the essential Services for all your financial needs.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="features-card feature-one">
                        <img src="<?php echo base_url(); ?>assets/img/icon/personal.svg" alt="" height="90px">
                        <h3>Personal Loan</h3>
                        <p class="mb-4">A versatile loan for various personal expenses such as medical bills, travel and many more typically without the need for collateral.</p>
                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="service-btn">
                                Apply Here
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="features-card feature-two">
                        <img src="<?php echo base_url(); ?>assets/img/icon/business.svg" alt="" height="90px">
                        <h3>Business Loan</h3>
                        <p class="mb-4">A loan designed to help businesses cover operational costs, expand, or invest in
                            new opportunities.</p>
                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="service-btn">
                                Apply Here
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="features-card feature-three">
                        <img src="<?php echo base_url(); ?>assets/img/icon/car.svg" alt="" height="90px">
                        <h3>Car Loan</h3>
                        <p class="mb-4">A loan specifically for purchasing a vehicle, usually with the car itself
                            serving as collateral and repaid in fixed installments over time.</p>
                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="service-btn">
                                Apply Here
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="features-card feature-four">
                        <img src="<?php echo base_url(); ?>assets/img/icon/bike.svg" alt="" height="90px">
                        <h3>Two Wheeler Loan</h3>
                        <p class="mb-4">A financing option for purchasing a motorcycle or scooter, with the bike
                            typically acting as collateral, repaid in regular installments.</p>
                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="service-btn">
                                Apply Here
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="features-card feature-five">
                        <img src="<?php echo base_url(); ?>assets/img/icon/home.svg" alt="" height="90px">
                        <h3>House Loan</h3>
                        <p class="mb-4">Also known as a mortgage, this loan is for buying or renovating a home, where
                            the property serves as collateral until the loan is paid off.</p>
                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="service-btn">
                                Apply Here
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="features-card feature-six">
                        <img src="<?php echo base_url(); ?>assets/img/icon/Student.svg" alt="" height="90px">
                        <h3>Education Loan</h3>
                        <p class="mb-4">A loan to cover educational expenses such as tuition, books, and living costs,
                            often with flexible repayment terms that start after graduation.</p>
                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="service-btn">
                                Apply Here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Service Section Start -->
    <div class="service-section service-style-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 service-img">
                </div>
                <div class="col-md-6 offset-md-6 p-0">
                    <div class="service-text">
                        <h2>We Understand all your Needs and invented a solution for it.</h2>
                        <ul>
                            <li>
                                <i class="flaticon-checked"></i>
                                100% Digitalised
                            </li>
                            <li>
                                <i class="flaticon-checked"></i>
                                User Friendly UI
                            </li>
                            <li>
                                <i class="flaticon-checked"></i>
                                Easy and Instant Process
                            </li>
                            <li>
                                <i class="flaticon-checked"></i>
                                24/7 Support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- Progress Section Start -->
    <div class="progress-section progress-style-two">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 p-0">
                    <div class="progress-text">
                        <h2>We Always try our best to be the best support to our clients as possible</h2>
                        <div class="progress-inner">
                            <p>Approval Rate</p>
                            <span>80%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress-inner">
                            <p>Complete Digital Process</p>
                            <span>100%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress-inner">
                            <p>Customer Satisfaction</p>
                            <span>75%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 progress-image">
                </div>
            </div>
        </div>
    </div>
    <!-- Progress Section End -->

    <!-- Pricing Section Start -->
    <div class="pricing-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card price-card-two">
                        <div class="price-header text-center">
                            <h2>Personal Loan</h2>
                            <!-- <h3><sup>$</sup>30<span>/Month</span></h3> -->
                            <i class="flaticon-startup">
                                <img src="<?php echo base_url(); ?>assets/img/icon/personal.svg" alt="" width="50px">

                            </i>
                        </div>

                        <div class="pricing-feature">
                            <ul>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Upto Rs.5,00,000/-
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Complete user guidance
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Quick Responses
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    24/7 Support
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Flexible EMI Tenure
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Top Loan Lenders
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Low Rate of Interest
                                </li>
                            </ul>
                        </div>

                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="default-btn">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card price-card-two">
                        <div class="price-header text-center">
                            <h2>Business Loan</h2>
                            <!-- <h3><sup>$</sup>49<span>/Month</span></h3> -->
                            <i class="flaticon-startup">
                                <img src="<?php echo base_url(); ?>assets/img/icon/business.svg" alt="" width="50px">

                            </i>
                        </div>

                        <div class="pricing-feature">
                            <ul>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Upto Rs.25,00,000/-
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Complete user guidance
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    No collelateral
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    24/7 Support
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Flexible EMI Tenure
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Top Loan Lenders
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Low Rate of Interest
                                </li>
                            </ul>
                        </div>

                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="default-btn">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-card price-card-two">
                        <div class="price-header text-center">
                            <h2>Car Loan</h2>
                            <!-- <h3><sup>$</sup>49<span>/Month</span></h3> -->
                            <i class="flaticon-startup">
                                <img src="<?php echo base_url(); ?>assets/img/icon/car.svg" alt="" width="50px">
                            </i>
                        </div>

                        <div class="pricing-feature">
                            <ul>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Upto Rs.10,00,000/-
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Complete user guidance
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    No collelateral
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    24/7 Support
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Flexible EMI Tenure
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Top Loan Lenders
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>
                                    Low Rate of Interest
                                </li>
                            </ul>
                        </div>

                        <div class="theme-button text-center">
                            <a href="<?php echo base_url(); ?>form" class="default-btn">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Section End -->


    <!-- Contact Section Start -->
    <div class="contact-section pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0 contact-img"
                    style="background: url(<?php echo base_url(); ?>assets/img/contact.svg); background-repeat: no-repeat; background-size: contain; background-position: center;">
                    <!-- <img src="<?php echo base_url(); ?>assets/img/contact.jpg" alt="contact"> -->
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
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href=">
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
                                <a href="<?php echo base_url(); ?>>
                                    <i class="flaticon-right-chevron"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>personal">
                                    <i class="flaticon-right-chevron"></i>
                                    Loans
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>creditscore">
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
                            <li><a href="<?php echo base_url(); ?>terms">Terms & Conditions</a></li>
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