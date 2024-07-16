<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="credbuddha website">
    <meta name="keywords" content="credbuddha,loan,banks,nbfcs">

    <!-- Site Title -->
    <title>Cred Buddha</title>
    <!-- Site favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/site/images/favicon.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Swiper js -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/swiper_bundle.min.css" type="text/css" /> 

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/site/css/materialdesignicons.min.css" />


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/site/css/style.css" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/website/img/favicon.png" type="image/x-icon"> 

    <!-- CSS here -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css1/bootstrap.min.css"
        media="all" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css1/default.css" media="all"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css1/style.css" media="all">
    <style>
        * {
            font-family: "Chivo", sans-serif;
        }
        body {
            font-family: "Chivo", sans-serif;
        }
        h1,h2,h3,h4,h5,h6
        {
            font-family: "Chivo", sans-serif;
        }
        .btn
        {
            font-family: "Chivo", sans-serif;
        }
    </style>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60" class="chivo-unique-class">
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
        <div class="container-fluid px-lg-5">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="#" style="width: 200px;">
                <img src="<?php echo base_url(); ?>assets/site/images/logo/logo.webp" alt="" width="100%" id="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLoans" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Loans
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLoans">
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>personal_loan">Personal Loan</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>business_loan">Business Loan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#screenshot" class="nav-link">Screenshot</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="#testimonial" class="nav-link">Testimonial</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link" style='text-wrap: nowrap'>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <!-- Your additional content here -->
                    </li>
                </ul>
                <img src="<?php echo base_url(); ?>assets/site/images/play_store.png" alt="" height="100%" />
            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <!-- home-agency start -->
    <section class="hero-2" id="home">
        <div class="bg-overlay-img"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center hero-content">
                <div class="col-lg-6">
                    <div class="avatar avatar-xl rounded-circle bg-soft-primary text-primary shadow-sm mb-4">
                        <i class="mdi mdi-rocket-launch mb-0 h2"></i>
                    </div>
                    <h1 class="hero-title fw-bold mb-4 display-5">Empowering Financial Enlightenment <span
                            style="color: #55b019;">CredBuddha</span></h1>
                    <p class="opacity-75 mb-4 pb-3 fs-17">Your trusted financial companion, offering guidance and tools
                        for success. Take control of your journey to financial empowerment today.</p>
                    <a href="javascript:void(0);" class="btn btn-lg btn-gradient-primary">Get Started Today</a>
                    <a href="javascript:void(0);" class="btn btn-lg btn-outline-dark">Download App</a>
                </div>

                <div class="col-md-8 col-lg-5 offset-lg-1">
                    <div class="hero-2-img mt-5 mt-lg-0">
                        <img src="<?php echo base_url(); ?>assets/site/images/1.webp" alt="" class="img-fluid rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home-agency end -->

    <!-- How it work start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h2 class="title">why do we choose credbuddha?</h2>
                    <!-- <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="work-box px-lg-5 text-center mb-5 mb-lg-0">
                        <div class="work-icon bg-soft-primary mb-4">
                            <i class="mdi mdi-format-list-bulleted"></i>
                        </div>
                        <h5 class="fw-semibold">1. Comprehensive Financial Tools</h5>
                        <p class="text-muted">From budgeting to investments, CredBuddha offers diverse tools to address
                            financial needs.</p>
                        <img src="<?php echo base_url(); ?>assets/site/images/arrow_top.png" alt="" class="work-arrow" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work-box px-lg-5 text-center mb-5 mb-lg-0">
                        <div class="work-icon bg-soft-success mb-4">
                            <i class="mdi mdi-palette-outline"></i>
                        </div>
                        <h5 class="fw-semibold">2. User-Friendly Interface</h5>
                        <p class="text-muted">CredBuddha empowers users with guidance and resources for confident
                            financial goal achievement.</p>
                        <img src="<?php echo base_url(); ?>assets/site/images/arrow_bottom.png" alt="" class="work-arrow" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="work-box px-lg-5 text-center mb-5 mb-lg-0">
                        <div class="work-icon bg-soft-warning mb-4">
                            <i class="mdi mdi-layers-triple"></i>
                        </div>
                        <h5 class="fw-semibold">3. Commitment to Empowerment</h5>
                        <p class="text-muted">Our intuitive platform simplifies financial management for all users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it work end -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-8 col-lg-6 text-center">
                    <h2 class="title">Our <span class="fw-bold">Best Services</span></h2>
                    <p class="text-muted">One Frist Stop for all your financial problems</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel"
                            aria-labelledby="pills-monthly-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricing-box">
                                        <div class="text-center p-4 rounded">
                                            <div class="text-center py-3">
                                                <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/personal.svg" alt="" width="40%" />
                                            </div>
                                            <h3 class="mt-3 mb-0">Personal Loan</h3>
                                        </div>
                                        <a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-100">Apply Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing-box">
                                        <div class="text-center p-4 rounded">
                                            <div class="text-center py-3">
                                                <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/business.svg" alt="" width="40%" />
                                            </div>
                                            <h3 class="mt-3 mb-0">Business Loan</h3>
                                        </div>
                                        <a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-100">Apply Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing-box">
                                        <div class="text-center p-4 rounded">
                                            <div class="text-center py-3">
                                                <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/home.svg" alt="" width="40%" />
                                            </div>
                                            <h3 class="mt-3 mb-0">Home Loan</h3>
                                        </div>
                                        <a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-100">Apply Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <ul class="nav nav-pills pricing-tab mb-4" id="pills-tab" role="tablist">
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel"
                            aria-labelledby="pills-monthly-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricing-box">
                                        <div class="text-center p-4 rounded">
                                            <div class="text-center py-3">
                                                <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/Student.svg" alt="" width="40%" />
                                            </div>
                                            <h3 class="mt-3 mb-0" style="text-wrap: nowrap;">Educational Loan</h3>
                                        </div>
                                        <a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-100">Apply Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing-box">
                                        <div class="text-center p-4 rounded">
                                            <div class="text-center py-3">
                                                <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/bike.svg" alt="" width="40%" />
                                            </div>
                                            <h3 class="mt-3 mb-0" style="text-wrap: nowrap;">Two Wheeler Loan</h3>
                                        </div>
                                        <a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-100">Apply Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricing-box">
                                        <div class="text-center p-4 rounded">
                                            <div class="text-center py-3">
                                                <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/car.svg" alt="" width="40%" />
                                            </div>
                                            <h3 class="mt-3 mb-0">Car Loan</h3>
                                        </div>
                                        <a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-100">Apply Now</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Pricing end -->

    <!-- features start -->
    <section class="section bg-light" id="features">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">Our <span class="fw-bold">Features</span></h6>
                    <h2 class="title">Smart Solutions For Buys People</h2>
                    <p class="text-muted">Discover the Power of Financial Freedom.</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="<?php echo base_url(); ?>assets/site/images/2.webp" alt="" class="img-fluid d-block mx-auto ms-lg-auto" />
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <h1 class="fs-38 mb-4">Empowering dreams, yet rejecting disbelief.</h1>
                    <!-- <p class="text-muted">On the other hand, we denounce with righteous indignation so blinded that they cannot.</p> -->

                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <span class="avatar avatar-sm bg-white text-primary rounded-circle shadow-primary">
                                <i class="mdi mdi-check"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="text-muted"><span class="text-dark fw-bold">The wise person therefore always holds
                                    in matters to this principle a selection rejects pleasures.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <span class="avatar avatar-sm bg-white text-primary rounded-circle shadow-primary">
                                <i class="mdi mdi-layers-outline"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="text-muted">But circumstances all a born error accusamus dolorous praise the whole
                                thing reveal it is that inventor.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <span class="avatar avatar-sm bg-white text-primary rounded-circle shadow-primary">
                                <i class="mdi mdi-lock-outline"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="text-muted">
                                And yes, it is easy to distinguish the expedited option when free time is spent with us,
                                and there is nothing to prevent us from doing so.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- features start -->
    <section class="section bg-light features-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h1 class="fs-38 mb-4">Embark on your journey, despite naysayers' blindness.</h1>
                    <!-- <p class="text-muted">On the other hand, we denounce with righteous indignation so blinded that they cannot.</p> -->

                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <span class="avatar avatar-sm bg-white text-primary rounded-circle shadow-primary">
                                <i class="mdi mdi-check"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="text-muted"><span class="text-dark fw-bold">At CredBuddha, wisdom dictates
                                    prioritizing principles over fleeting pleasures..</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <span class="avatar avatar-sm bg-white text-primary rounded-circle shadow-primary">
                                <i class="mdi mdi-layers-outline"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="text-muted">Unveiling errors, embracing opportunities—CredBuddha illuminates the
                                path to financial liberation..</p>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <span class="avatar avatar-sm bg-white text-primary rounded-circle shadow-primary">
                                <i class="mdi mdi-lock-outline"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <p class="text-muted">
                                Ease of access, freedom of choice—CredBuddha ensures your journey to financial
                                empowerment is unhindered.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <img src="<?php echo base_url(); ?>assets/site/images/3.webp" alt="" class="img-fluid d-block mx-auto ms-lg-auto" />
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- counter start -->
    <!-- <section class="section cta-bg">
            <div class="bg-overlay bg-dark"></div>
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-web text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="825">0</span></h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">Global Brands</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-emoticon-happy text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="1800">0</span>+</h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-lightbulb-on text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="599">0</span>+</h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">Creative Idea</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="text-center my-3">
                            <div class="d-flex align-items-center counter-content text-start">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-account-multiple text-white display-5"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h1 class="text-white"><span class="counter_value" data-target="2000">0</span>+</h1>
                                    <p class="counter-name text-white opacity-75 mb-0 text-uppercase">User clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- counter end -->

    <!-- App Screens start -->
    <section class="section overflow-hidden" id="screenshot">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <!-- <h6 class="subtitle">App <span class="fw-bold">Screens</span></h6> -->
                    <h2 class="title">Empowering Your Journey to Success!</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="screen-slider overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/site/images/credit_card.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/site/images/dashboard.webp" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/site/images/front_page.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/site/images/loan_notifications_page.webp" alt="" class="img-fluid" />
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/site/images/home.webp" alt="" class="img-fluid" />
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Screens end -->

    <!-- testimonial start -->
    <section class="section bg-light" id="testimonial">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">Our <span class="fw-bold">Testimonial</span></h6>
                    <h2 class="title">What Our Customers Say</h2>
                    <!-- <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p> -->
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-box text-center">
                        <!-- <p class="text-muted mb-2">“Itaque earum us tenetur sapiente delectus asperiores repellat.”</p> -->
                        <h5 class="fs-18 fw-semibold lh-base mb-4 pb-3">
                            CredBuddha has been a game-changer for me. From managing my budget to finding the perfect
                            loan, their platform offers everything I need in one place. Highly recommended!"
                        </h5>
                        <!-- <img src="<?php echo base_url(); ?>assets/site/images/users/user-1.jpg" alt="" class="shadow rounded-circle" width="70" /> -->
                        <h5 class="fs-18 fw-semibold mt-4 mb-0">Bindu</h5>
                        <p class="text-muted fs-14">Tester, Visakhapatnam</p>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-md-5">
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url(); ?>assets/site/images/banks/au.png" alt="" width="50%" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url(); ?>assets/site/images/banks/axis.png" alt="" width="50%" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url(); ?>assets/site/images/banks/indusind.jpeg" alt="" width="50%" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url(); ?>assets/site/images/banks/kotak-811.png" alt="" width="50%" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url(); ?>assets/site/images/banks/sbi.png" alt="" width="50%" />
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-center py-3">
                            <img src="<?php echo base_url(); ?>assets/site/images/banks/yes.png" alt="" width="50%" />
                        </div>
                    </div>
                </div> -->
        </div>
    </section>
    <!-- testimonial end -->
    <section class="section" id="partners">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <!-- <h6 class="subtitle">Our <span class="fw-bold">Partners</span></h6> -->
                    <h2 class="title">Our Partners</h2>
                    <p class="text-muted">Meet our Best Partners</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel"
                            aria-labelledby="pills-monthly-tab">
                            <div class="row">
                                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                    <div class="text-center py-3">
                                        <img src="<?php echo base_url(); ?>assets/site/images/banks/1.jpg" alt="" width="40%" />
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                    <div class="text-center py-3">
                                        <img src="<?php echo base_url(); ?>assets/site/images/banks/2.jpeg" alt="" width="40%" />
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                    <div class="text-center py-3">
                                        <img src="<?php echo base_url(); ?>assets/site/images/banks/4.jpg" alt="" width="40%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="col-12">
                    <ul class="nav nav-pills pricing-tab mb-4" id="pills-tab" role="tablist">
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel"
                            aria-labelledby="pills-monthly-tab">
                            <div class="row">
                                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                    <div class="text-center py-3">
                                        <img src="<?php echo base_url(); ?>assets/site/images/banks/4.jpg" alt="" width="40%" />
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-center align-items-center"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
                                    <div class="text-center py-3">
                                        <img src="<?php echo base_url(); ?>assets/site/images/banks/5.png" alt="" width="40%" />
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-center align-items-center">
                                    <div class="text-center py-3">
                                        <img src="<?php echo base_url(); ?>assets/site/images/banks/6.png" alt="" width="40%" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

            </div>

        </div>

        </div>
    </section>
    <!-- faqs start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">Our <span class="fw-bold">FAQs</span></h6>
                    <h2 class="title">Frequently Asked Questions</h2>
                    <!-- <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p> -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img src="<?php echo base_url(); ?>assets/site/images/faq.png" alt="" class="img-fluid d-block mx-auto" />
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="accordion accordion-flush faqs-accordion mt-4 mt-lg-0" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    How do I sign up for CredBuddha?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-secondary">
                                    Visit our website, click "Sign Up," and follow the prompts to create your account.
                                </div>
                            </div>
                        </div>
                        <!-- accordion-header end -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What financial tools does CredBuddha offer?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-secondary">
                                    We offer budgeting, credit monitoring, loan applications, investment optimization,
                                    and more.
                                </div>
                            </div>
                        </div>
                        <!-- accordion-header end -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Is CredBuddha secure?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-secondary">
                                    Yes, we use industry-standard encryption to protect your data.
                                </div>
                            </div>
                        </div>
                        <!-- accordion-header end -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Can I access CredBuddha on my mobile device?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-secondary">
                                    Yes, our platform is fully mobile-responsive.
                                </div>
                            </div>
                        </div>
                        <!-- accordion-header end -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Is customer support available if I have questions or need assistance?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-secondary">
                                    Absolutely! Our dedicated customer support team is here to help you with any
                                    questions or concerns you may have.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faqs end -->


    <!-- cta start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="text-center">
                        <h1 class="display-5 fw-bold mb-4">
                            Available In Your <br />
                            Smartphone.
                        </h1>
                        <p class="text-muted mx-auto mb-5 w-75">Our platform encourages wise decision-making,
                            prioritizing selections that lead to greater financial success, while avoiding short-term
                            pleasures that may result in greater pains.</p>
                        <!-- <a href="javascript:void(0);" class="me-1">
                                <img src="<?php echo base_url(); ?>assets/site/images/i-store.png" alt="" class="shadow" height="52" />
                            </a> -->
                        <a href="javascript:void(0);">
                            <img src="<?php echo base_url(); ?>assets/site/images/play_store.png" alt="" class="shadow" height="52" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta end -->
    <!-- <section class="pt-125 pb-140 bg_white">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 mx-auto">
                        <div class="section-title">
                            <h2 class="wow fadeInUp">Calculator</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Get an approximate figure for the total
                                monthly instalment payments along with a complete break-up of the home loan.</p>
                        </div>
                    </div>
                </div>
                <div class="calculator-widget mt-50">
                    <div class="row  gy-lg-0 gy-3">
                        <div class="col-lg-7">
                            <div class="single-calculator-widget wow fadeInUp" data-wow-delay="0.1s">
                                <div class="single-range">
                                    <div class="range-header d-flex justify-content-between align-items-center mb-25">
                                        <h6>Loan Amount</h6>

                                        <input type="text" id="SetRange">
                                    </div>
                                    <div id="RangeSlider"></div>
                                </div>
                                <div class="single-range mt-85 mb-95">
                                    <div
                                        class="range-header d-flex flex-wrap justify-content-between align-items-center mb-25">
                                        <h6>Loan Duration</h6>


                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li><span class="active_bar"></span></li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link month-tab" id="monthTab-tab" data-bs-toggle="tab"
                                                    href="#monthTab" role="tab" aria-controls="monthTab"
                                                    aria-selected="true">Month</a>
                                            </li>
                                            <li class="nav-item " role="presentation">
                                                <a class="nav-link year-tab active" id="yearTab-tab"
                                                    data-bs-toggle="tab" href="#yearTab" role="tab"
                                                    aria-controls="yearTab" aria-selected="false">Year</a>
                                            </li>

                                        </ul>

                                        <input type="text" id="SetMonthRange">
                                    </div>


                                    <div class="tab-content">
                                        <div class="tab-pane fade " id="monthTab" role="tabpanel"
                                            aria-labelledby="monthTab">

                                            <div id="MonthRangeSlider"></div>
                                        </div>
                                        <div class="tab-pane fade show active" id="yearTab" role="tabpanel"
                                            aria-labelledby="yearTab">

                                            <div id="YearRangeSlider"></div>
                                        </div>

                                    </div>
                                    <div class="d-none" id="WeekRangeSlider"></div>
                                </div>

                                <div class="bg_disable px-4 py-2 mb-5 interestBox">
                                    <p>Rate of Interest</p>
                                    <span id="InterestAmount"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 pl-lg-35">
                            <div class="calculator-result-widget bg_disable wow fadeInUp" data-wow-delay="0.3s">

                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-8 col-sm-7">
                                        <div class="emi-amount">
                                            <h6>EMI Amount</h6>
                                            <span>Principal + Interest</span>
                                            <p class="mt-10 LoanTotalAmount"></p>
                                        </div>
                                        <div class="interest-payable mt-20">
                                            <h6>Interest Payable</h6>
                                            <p class="mt-10" id="InterestPayable"></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-5 col-7 mx-auto">
                                        <div class="pie-wrapper" id="loan_graph_circle">
                                            <div class="pie">
                                                <div class="left-side half-circle"></div>
                                                <div class="right-side half-circle"></div>
                                            </div>
                                            <div class="circle-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-lg-60 mt-25 text-center">
                                    <div class="col-12">
                                        <h4 class="mb-1">Your EMI Amount</h4>
                                        <h1 class="m-0" id="emiAmount">$ 3,495*</h1>

                                        <a href="<?php echo base_url(); ?>campaign/multi/loan?d=4&utm_source=WEB01"
                                            class="theme-btn theme-btn-lg mt-40">Apply Now
                                            <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- contact start -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 col-lg-6 text-center">
                    <h6 class="subtitle">Our <span class="fw-bold">Contact Us</span></h6>
                    <h2 class="title">Get in Touch</h2>
                    <!-- <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque rem aperiam.</p> -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-5">
                        <div class="flex-shrink-0">
                            <img src="<?php echo base_url(); ?>assets/site/images/hello_icon.png" alt="..." height="80" class="" />
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h2 class="mb-0">Say Hello!</h2>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="contact-icon bg-soft-primary text-primary">
                                    <i class="mdi mdi-email"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-0 fs-18">Email</h5>
                            </div>
                        </div>
                        <p class="mb-1"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a
                                href="javascript:void(0);" class="text-secondary">contact@credbuddha.com</a></p>
                        <!-- <p class=""><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a href="javascript:void(0);" class="text-secondary">BrandonDBrown@jourrapide.com</a></p> -->
                    </div>
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="contact-icon bg-soft-primary text-primary">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-0 fs-18">Phone</h5>
                            </div>
                        </div>
                        <p class="mb-1"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a
                                href="javascript:void(0);" class="text-secondary">+91 9154297990</a></p>
                        <!-- <p class=""><i class="mdi mdi-arrow-right-thin text-muted me-1"></i><a href="javascript:void(0);" class="text-secondary">(+01) 1234 5678 90</a></p> -->
                    </div>
                    <div class="">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="contact-icon bg-soft-primary text-primary">
                                    <i class="mdi mdi-google-maps"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-0 fs-18">Address</h5>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-2 text-secondary"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i>
                            Visakhapatnam Office</h5>
                        <p class="text-muted lh-base">3rd Floor (South West Wing), Plot no C2, Hill No 2, Non SEZ, IT
                            Park Rushikonda, Visakhapatnam - 530048</p>
                        <!-- <h5 class="fs-16 mb-2 text-secondary"><i class="mdi mdi-arrow-right-thin text-muted me-1"></i> Anguilla Office</h5>
                            <p class="text-muted lh-base mb-0">2118 Bird Spring, Creek Road, TX 77388</p> -->
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="card contact-form rounded-lg mt-4 mt-lg-0">
                        <div class="card-body p-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formFirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="formFirstName"
                                                placeholder="Your first name..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formLastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="formLastName"
                                                placeholder="Last first name..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formEmail" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="formEmail"
                                                placeholder="Your email..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formPhone" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="formPhone"
                                                placeholder="Type phone number..." required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="formSubject" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="formSubject"
                                                placeholder="Type subject..." required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label for="formMessages" class="form-label">Messages</label>
                                            <textarea class="form-control" id="formMessages" rows="4"
                                                placeholder="Type messages..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary">Send Messages <i
                                        class="mdi mdi-send ms-1"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- footer & cta start -->
    <section class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <h5 class="fs-22 mb-3 fw-semibold text-white">Our Information</h5>
                            <ul class="list-unstyled footer-nav">
                                <li><a href="<?php echo base_url(); ?>page/privacy_policy" class="footer-link">Privacy Policy</a></li>
                                <li><a href="<?php echo base_url(); ?>page/terms_and_conditions" class="footer-link">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-start">
                    <div class="footer-logo mb-4">
                        <a href="#">
                            <h1 style="text-transform: capitalize;color: #fff;">CredBuddha</h1>
                        </a>
                    </div>
                    <a href="#" class="text-white">contact@credbuddha.com</a>
                    <p class="text-white">+91 9154297990</p>

                    <h5 class="fs-18 mb-3 text-white">Follow Us</h5>
                    <ul class="list-inline mt-5">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="footer-social-icon"><i
                                    class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="footer-social-icon"><i
                                    class="mdi mdi-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-tagline">
        <div class="container">
            <div class="row justify-content-between py-2">
                <div class="col-md-6">
                    <p class="text-white opacity-75 mb-0 fs-14">
                        Powered by Intexmmedia - <a href="#"
                            class="text-white">intexmmedia.com</a>
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="" class="text-white opacity-75 fs-14"><span><a href="<?php echo base_url(); ?>page/terms_and_conditions" style="color: #fff;">Terms
                                Conditions | </a></span><span><a href="<?php echo base_url(); ?>page/privacy_policy"
                                style="color: #fff;">Privacy Policy</a></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer & cta end -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-gradient-primary" id="back-to-top"><i
            class="mdi mdi-chevron-up"></i></a>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center mb-4">
                        <h4 class="mb-0">Welcome Back</h4>
                        <p class="text-muted fs-15">Welcome back! Please enter your details.</p>
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" placeholder="Your email..." />
                    </div>
                    <div class="mb-2">
                        <label for="inputPasseord" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPasseord" />
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4 pb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember for 30 days
                            </label>
                        </div>
                        <a href="javascript:void(0);" class="text-secondary fs-13">Forgot Password..?</a>
                    </div>

                    <a href="javascript:void(0);" class="btn btn-gradient-primary w-100" data-bs-dismiss="modal">Sign
                        up</a>
                    <div class="text-center">
                        <div class="position-relative my-4">
                            <span class="bg-soft-secondary w-100 d-inline-block" style="height: 1px;"></span>
                            <p
                                class="text-muted fs-15 mb-0 mt-1 bg-white px-2 position-absolute top-50 start-50 translate-middle">
                                Or continue with
                            </p>
                        </div>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="btn btn-danger">
                                    <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/google.png" alt="google" class="img-fluid" width="24" />
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="btn btn-primary">
                                    <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/facebook.png" alt="" class="img-fluid" width="24" />
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0);" class="btn btn-info">
                                    <img src="<?php echo base_url(); ?>assets/site/images/auth-icon/twitter.png" alt="" class="img-fluid" width="24" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center mb-4">
                        <h4 class="">Sign up</h4>
                        <p class="text-muted text-uppercase fs-14">Start For Free</p>
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Your first name..." />
                    </div>
                    <div class="mb-3">
                        <label for="lasttName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lasttName" placeholder="Your last name..." />
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress1" placeholder="Your email..." />
                    </div>
                    <div class="mb-2">
                        <label for="inputPasseord2" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPasseord2" />
                    </div>
                    <div class="form-check mb-4 pb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                        <label class="form-check-label" for="flexCheckDefault1"> I agree to the <a
                                href="javascript:void(0);">Terms of Service</a> and <a
                                href="javascript:void(0);">Privacy Policy</a> </label>
                    </div>

                    <a href="javascript:void(0);" class="btn btn-gradient-primary w-100" data-bs-dismiss="modal">Create
                        account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script src="<?php echo base_url(); ?>assets/site/js/bootstrap.bundle.min.js"></script>
    <!-- counter -->
    <script src="<?php echo base_url(); ?>assets/site/js/counter.init.js"></script>
    <!-- swiper -->
    <script src="<?php echo base_url(); ?>assets/site/js/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/swiper.js"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/app.js"></script>
    
</body>

</html>