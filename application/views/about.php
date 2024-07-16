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
    <title>Credbuddha - About us</title>

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

    <!-- navbar -->
    <div class="navbar-area navbar-style-two">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="<?php echo base_url(); ?>" class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo-three.png" alt="logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url(); ?>assets/img/logo-two.png" alt="logo" height="60px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto" style="justify-content: center; width: 100%;">
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>" class="nav-link dropdown-toggle">Home</a>
                                <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">Home Page 1</a>
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
                                <a href="<?php echo base_url(); ?>about" class="nav-link active">About</a>
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


    <!-- About Title Section Start -->
    <!-- About Title Section End -->

    <!-- About Section Start -->
    <section class="about-section pb-80">
        <div class="container">
            <div class="container d-md-flex align-items-center justify-content-around p-3 my-5 rounded my-2 text-center"
                style="border: 1px solid #ddd;">
                <div class="col-md-1">
                    <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="image" width="50px">
                </div>
                <div class="col-md-8">
                    <h3 class="d-block p-0 m-0 ">Apply for instant Personal Loan</h3>
                    <p class="p-0 m-0">Get Instant Personal At your Door Step <span class="text-primary"><a href="<?php echo base_url(); ?>form">Apply
                            now</a></span>
                    </p>
                </div>
                <div class="btn col-md-4 p-0"><a href="<?php echo base_url(); ?>form"><button class=" btn btn-rounded btn-primary electronics-btn"
                        type="submit">
                        Apply Now
                    </button></a></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="<?php echo base_url(); ?>assets/img/about/2.png" alt="about image">
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h5>The Modern Way to Make Succesful Business</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="about-us">
                                    <i class="flaticon-podium icon-one"></i>
                                    <p>Best Finance Partner</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="about-us">
                                    <i class="flaticon-customer-service icon-two"></i>
                                    <p>24/7 Support</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="about-us">
                                    <i class="flaticon-handshake icon-three"></i>
                                    <p>100% Trusted</p>
                                </div>
                            </div>
                        </div>

                        <!-- <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p> -->

                        <div class="theme-button">
                            <a href="<?php echo base_url(); ?>about" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!--Content section-->
    <div class="container mt-5">
        <!-- <h3 class="text-center"><u>About Us</u></h3><br> -->
        <p class="lead">At Intexm Media, where financial empowerment meets digital innovation. We are dedicated to
            providing tailored financial solutions to our customers, including personalized loan options and curated
            credit card selections. Our mission is to empower individuals like you to achieve your financial goals with
            confidence and ease.

            But we don't stop there. In today's digital age, marketing plays a crucial role in connecting customers with
            the right solutions. That's why we've combined our expertise in finance with cutting-edge digital marketing
            strategies.

            Through our integrated approach, we ensure that our customers not only have access to the best financial
            products but also receive targeted and effective marketing solutions.

            .</p>

        <h5>Our Vision</h5>
        <p>To be the foremost catalyst of digital success, empowering businesses to thrive in the ever-evolving online
            ecosystem. This includes providing fintech loan aggregator services. We envision a future where every
            brand's story is not only heard but resonates across digital channels, creating meaningful connections and
            driving unprecedented growth. Our commitment is to lead with innovation, transparency, and expertise,
            becoming the trusted partner for businesses navigating the dynamic world of digital marketing.</p>

        <h5>Our Mission</h5>
        <p>Our mission is simple - to help businesses succeed in the digital world. We strive to provide our clients
            with top-notch marketing services, including fintech loan aggregator services, that are focused on
            delivering measurable results. Whether it's increasing brand awareness, generating leads, or driving sales,
            our team is dedicated to achieving our clients' goals. We are passionate about what we do, and take pride in
            our ability to deliver exceptional service and support to each and every client.
        </p>

        <h5>Our Services</h5>
        <p>Cred Budha is a Digital Loan Aggregator. Our range of loan services caters to various financial purposes,
            such as medical expenses, education, travel, debt consolidation, or any other financial needs.</p>

        <h5>How We Stand Out</h5>
        <p>It is now easier than ever to get a personal loan from our approved list of lenders. We bridge the gap
            between lenders and borrowers with quick approval rates and completely transparent unsecured loan processes.
        </p>
        <!-- <ul>
            <li>Founded in 2019</li>
            <li>2 million Daily Active Users</li>
            <li>17M+ Daily Applications & Growing</li>
            <li>1 billion soft loan approvals to date</li>
            <li>80% Approval rate</li>
        </ul> -->

        <!-- <h5>Our Journey</h5>
        <ul>
            <li><strong>2019:</strong> Launched as a customer-centric financial solution, quickly becoming the
                fastest-growing Digital Loan Aggregator.</li>
            <li><strong>2020:</strong> Exponential growth outperformed industry standards, driven by high demand for
                innovative loan solutions.</li>
            <li><strong>2022:</strong> Expanded globally, ensuring a significant presence in the United States,
                revitalizing the loan marketplace.</li>
            <li><strong>2023:</strong> Achieved over 30M+ app downloads in India, making soft loan approval the norm.
            </li>
        </ul> -->

        <h5>Why Choose Us?</h5>
        <ul>
            <li><strong>Business Loans in India:</strong> Fuel growth, offer flexibility, and aid cash flow management.
            </li>
            <li><strong>Instant Cash Loan:</strong> Access up to ₹15 Lakhs instantly to meet financial needs.</li>
            <li><strong>Affordable Interest Rates:</strong> Starting at just 11.99% p.a.</li>
            <li><strong>Quick & High Approval Rate:</strong> Streamlined processes ensure rapid approval.</li>
            <li><strong>Flexible Repayment Plans:</strong> Designed to align seamlessly with your financial
                capabilities.</li>
            <li><strong>Safe and Secure:</strong> Financial data is treated with the utmost confidentiality.</li>
        </ul>

        <!-- <h5>Testimonials</h5>
        <p>Hear from our satisfied customers through our video testimonials.</p> -->

        <h5>Contact Us</h5>
        <p>For assistance or more information about personal loans and to address concerns, please contact us at <a
                href="mailto:info@credbudha.com">contact@credbudha.com</a>.</p>

        <h5>How to Connect</h5>
        <p><a href="https://www.credbuddhanew.com" class="btn btn-primary">Download App</a> &nbsp; Join Cred Budha - Your
            Partner
            In Every Step!</p>

        <h5>FAQs</h5>
        <p>At Cred Budha, applicants can apply for loans ranging from ₹10,000 to ₹15 Lakhs at interest rates starting
            from 11.99% p.a. Loans can be repaid over a flexible tenure ranging from 12 months to several years.</p>
        <p>When in urgent need of cash, traditional banks can take a long time to process loan applications. If you seek
            an instant loan with fast approval, a user-friendly interface, and quick sanction, Cred Budha is the answer.
        </p>

        <h5>Application Process</h5>
        <ol>
            <li><strong>Download the Cred Budha app</strong> or visit our website.</li>
            <li><strong>Enter the desired loan amount and tenure period.</strong></li>
            <li><strong>Fill in required details</strong> (name, email, ID, phone number, residential address,
                employment details, net income, etc.).</li>
            <li><strong>Submit required documents</strong> (salary slips, bank statements, identity proof, and
                residential proof).</li>
            <li>Approved lenders who match your eligibility will contact you shortly after submission.</li>
        </ol>

        <h5>Eligibility Criteria</h5>
        <ul>
            <li><strong>Resident or Citizen of India</strong></li>
            <li><strong>Age between 21 and 57 years</strong></li>
            <li><strong>Salaried individual or business professional with at least 1 year of experience in the current
                    organization</strong></li>
            <li><strong>Minimum salary of ₹18,000</strong></li>
        </ul>

        <p>Cred Budha sets a simple eligibility criterion and a digital documentation process to avail a personal loan.
            The platform is user-friendly, accessible 24/7 through the web and Android app, allowing users to apply for
            loans up to ₹15 Lakhs instantly.</p>

        <p>Join Cred Budha for an easy and secure loan application experience and take advantage of exciting deals,
            offers, and reward points at multiple levels.</p>
    </div>
    <!--End content section -->

    <!-- Theory Section Start -->
    <!-- <div class="theory-section theory-style-two">
        <div class="container">
            <div class="row theory-area">
                <div class="col-lg-7">
                    <div class="theory-text">
                        <h5>My Theory is Customer Service is First</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas accumsan.</p>

                        <div class="signature-box">
                            <img src="<?php echo base_url(); ?>assets/img/signature.png" alt="signature">
                            <p>Babatunde Smithi</p>
                            <span>Founder and CEO</span>
                        </div>
                    </div>
                </div>
                <div class="theory-img">
                    <img src="<?php echo base_url(); ?>assets/img/theory-img.png" alt="theory image">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Theory Section End -->

    <!-- Video Section Start -->
    <!-- <div class="video-style-two video-style-three">
        <div class="container-fluid">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="video-text text-center">
                        <a href="https://www.youtube.com/watch?v=Fbps7_mkIT0" class="popup-vimeo">
                            <i class="flaticon-play"></i>
                        </a>
                        <p>Watch our video</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Video Section End -->

    <!-- Team Section Start -->
    <!-- <section class="team-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Team Member</span>
                <h5>Meet Our Expert Team Member</h5>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>assets/img/team/1.jpg" alt="team member">

                            <div class="team-text">
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Jerry Hudson</h3>
                                <p>Business Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>assets/img/team/2.jpg" alt="team member">

                            <div class="team-text">
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Juho Hudson</h3>
                                <p>Research Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>assets/img/team/3.jpg" alt="team member">

                            <div class="team-text">
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Sarah Tylor</h3>
                                <p>Marketing Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="<?php echo base_url(); ?>assets/img/team/4.jpg" alt="team member">

                            <div class="team-text">
                                <div class="team-social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Aikin Ward</h3>
                                <p>Business Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Team Section End -->

    <!-- Service Section Start -->
    <!-- <div class="service-section service-style-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 service-img">
                </div>
                <div class="col-md-6 offset-md-6 p-0">
                    <div class="service-text">
                        <h5>We Understand the User Need and Those Servicesfor Them</h5>
                        <ul>
                            <li>
                                <i class="flaticon-checked"></i>
                                Building Networking
                            </li>
                            <li>
                                <i class="flaticon-checked"></i>
                                Software Development
                            </li>
                            <li>
                                <i class="flaticon-checked"></i>
                                Business Strategy
                            </li>
                            <li>
                                <i class="flaticon-checked"></i>
                                Business Management
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service Section End -->

    <!-- Progress Section Start -->
    <!-- <div class="progress-section progress-style-two">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 p-0">
                    <div class="progress-text">
                        <h5>We Always Try to be the Best Support to Our Clients as Possible</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>

                        <div class="progress-inner">
                            <p>Software Development</p>
                            <span>70%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress-inner">
                            <p>Digital Marketing</p>
                            <span>85%</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress-inner">
                            <p>Business Management</p>
                            <span>95%</span>
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
    </div> -->
    <!-- Progress Section End -->

    <!-- Contact Section Start -->
    <div class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0">
                    <img src="<?php echo base_url(); ?>assets/img/contact1.jpg" alt="contact">
                </div>

                <div class="col-md-6 p-0">
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
                <h5>Subscribe Our Newsletter</h5>
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
                            <a href="<?php echo base_url(); ?>">
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