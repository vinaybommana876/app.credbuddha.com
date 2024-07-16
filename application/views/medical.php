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
    <title>Credbuddha | Marriage Loan</title>

    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <style>
        /* First sticky-footer instance */
        .first-sticky-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 10px;
        }

        .first-sticky-footer img.sticky_img {
            width: 100px;
        }

        .first-sticky-footer .para_sticky {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .first-sticky-footer .vector_div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .first-sticky-footer .vector_div img {
            width: 20px;
            margin-right: 5px;
        }

        .first-sticky-footer .vector_div .para_content {
            font-size: 0.9rem;
            margin-right: 15px;
            margin-bottom: 5px;
        }

        .first-sticky-footer .sticky_btn {
            margin-top: 10px;
            text-align: center;
        }

        .first-sticky-footer .sticky_btn .cta-Button button {
            background-color: #FFBA07;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }

        .first-sticky-footer .sticky_btn .cta-Button button:hover {
            background-color: #0056b3;
        }

        /* Second sticky-footer instance */
        .second-sticky-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: none !important;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 10px;
        }

        .second-sticky-footer .para_sticky {
            font-size: 12px;
            /* Adjusted font size for mobile */
        }

        .second-sticky-footer .vector_div {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            /* Removed bottom margin for mobile */
        }

        .second-sticky-footer .vector_div img {
            width: 20px;
            margin-right: 5px;
        }

        .second-sticky-footer .vector_div .para_content {
            font-size: 10px;
            /* Adjusted font size for mobile */
            margin-right: 2px;
            /* Adjusted margin for mobile */
        }

        .second-sticky-footer .sticky_btn {
            margin-top: 0;
            /* Removed top margin for mobile */
            text-align: center;
        }

        .second-sticky-footer .sticky_btn .cta-Button button {
            background-color: #FFBA07;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            /* Adjusted font size for mobile */
            cursor: pointer;
        }

        .second-sticky-footer .sticky_btn .cta-Button button:hover {
            background-color: #0056b3;
        }

        @media only screen and (max-width: 768px) {

            /* Hide the body content for screens smaller than 768px */
            .first-sticky-footer {
                display: none !important;
            }

            .second-sticky-footer {
                display: flex !important;
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
                                <a href="<?php echo base_url(); ?>index.php" class="nav-link dropdown-toggle active">Home</a>
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
    <div class="right-modal">
        <div class="modal fade right" id="sidebar-right" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="index.html">
                            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo">
                        </a>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="index.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/1.jpg" alt="home one">
                                                </a>
                                                <h3><a href="index.html">Home One</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="index-two.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/2.jpg" alt="home one">
                                                </a>
                                                <h3><a href="index-two.html">Home Two</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="about.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/3.jpg" alt="home one">
                                                </a>
                                                <h3><a href="about.html">About</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="service.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/4.jpg" alt="home one">
                                                </a>
                                                <h3><a href="service.html">Service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Blog Title Section Start -->
    <!-- <div class="blog-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="title-text text-center">
                    <h5>Blog Details</h5>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            Blog Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog Title Section End -->

    <!-- Blog Destails Area Start -->
    <div class="first-sticky-footer p-3 d-flex justify-content-center align-items-center" style="gap: 50px;">
        <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="Personal Loan" title="Personal Loan"
            class="sticky_img">
        <div class="text-center">
            <p class="para_sticky">Get Instant Loan Online up to ₹50 Lakhs</p>
            <div class="vector_div">
                <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Instant Disbursal" class="stick_vector">
                <p class="para_content p-0 m-0 mx-2">Instant Disbursal</p>
                <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Minimal Documentation" class="stick_vector">
                <p class="para_content p-0 m-0 mx-2">Minimal Documentation</p>
                <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="No Collateral" class="stick_vector">
                <p class="para_content p-0 m-0 mx-2">No Collateral</p>
            </div>
        </div>
        <div class="sticky_btn">
            <a
                href="<?php echo base_url(); ?>form">
                <div class="cta-Button">
                    <button class="redirect btn_apply_new_ui" id="stickyfooter_apply_btn">Apply Now</button>
                </div>
            </a>
        </div>
    </div>
    <!-- Mobile -->
    <div class="second-sticky-footer p-3 d-flex justify-content-center align-items-center">
        <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="Personal Loan" title="Personal Loan" class="" width="50px !important" dis>
        <div class="text-center">
            <p class="para_sticky m-0" style="font-size: 12px;">Get Instant Loan Online up to ₹50 Lakhs</p>
            <div class="vector_div p-0 m-0">
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Instant Disbursal" class="stick_vector">
                    <p class="para_content p-0 m-0 mx-2" style="font-size: 10px;">Instant Disbursal</p>
                </div>
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Minimal Documentation" class="stick_vector">
                    <p class="para_content p-0 m-0 mx-2" style="font-size: 10px;">Minimal Documentation</p>

                </div>
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="No Collateral" class="stick_vector">
                    <p class="para_content p-0 m-0 mx-2" style="font-size: 10px;">No Collateral</p>
                </div>
            </div>
        </div>
        <div class="sticky_btn">
            <a
                href="<?php echo base_url(); ?>form">
                <div class="cta-Button">
                    <button class="redirect btn_apply_new_ui" id="stickyfooter_apply_btn">Apply Now</button>
                </div>
            </a>
        </div>
    </div>

    <div class="blog-details-area pt-100 pb-70">
    <div class="container mt-5">
            <div class="container mt-5">
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
                    <div class="btn col-md-4 p-0"><button class=" btn btn-rounded btn-primary electronics-btn"
                            type="submit"><a href="<?php echo base_url(); ?>form">
                            Apply Now</a>
                        </button></div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="container">
                            <h3 class="text-center mb-4"><u>Medical Loan</u></h3>
                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/loans/Medicalloan.webp" alt="loan-img"></a>
                            <p>Medical loans help you cover your healthcare expenses with flexible repayment options.
                                Healthcare
                                is expensive, but with competitive interest rates, a personal loan can cover your
                                medical
                                emergency or any medical expenses without disrupting your financial stability. Medical
                                loans
                                in
                                India are easy to avail and apply for through CredBuddha.</p>

                            <h5>Top Banks Medical Loan Interest Rates in India</h5>
                            <p>Personal loans for medical treatment in India usually have interest rates starting from
                                10.49% p.a.
                                Below is a list of the top banks in India, with their competitive interest rates,
                                offering
                                the
                                best personal loan for medical expenses:</p>

                            <h5>Top Indian NBFCs Providing Medical Loan</h5>
                            <p>Medical Emergency Loans in India can now be taken from NBFCs over traditional loans. It
                                is
                                one of
                                the easiest and quickest ways to get urgent financial help, especially during medical
                                emergencies. Some of the top NBFCs in India providing medical loans are listed below:
                            </p>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NBFC</th>
                                            <th>Personal Loans Interest Rate (p.a.)</th>
                                            <th>Processing Fees (p.a.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Paysense</td>
                                            <td>16% - 36%</td>
                                            <td>Up to 3%</td>
                                        </tr>
                                        <tr>
                                            <td>Bajaj Finserv</td>
                                            <td>13% onwards</td>
                                            <td>Up to 4.13%</td>
                                        </tr>
                                        <tr>
                                            <td>Tata Capital</td>
                                            <td>10.99% - 19.75%</td>
                                            <td>Up to 3%</td>
                                        </tr>
                                        <tr>
                                            <td>Indiabulls Dhani</td>
                                            <td>11.99% onwards</td>
                                            <td>Up to 3%</td>
                                        </tr>
                                        <tr>
                                            <td>Fullerton India</td>
                                            <td>11.99%</td>
                                            <td>Up to 6.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Money Tap</td>
                                            <td>13% onwards</td>
                                            <td>2% on loan amount of Rs 25,000 above</td>
                                        </tr>
                                        <tr>
                                            <td>Paisa Bazaar</td>
                                            <td>10.49%</td>
                                            <td>Up to 3%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5>Features & Benefits of Medical Loan</h5>
                            <ul>
                                <li>Quick and Convenient: Quick application process to access funds faster.</li>
                                <li>Lower Interest Rates: Starting from 11.99% p.a.</li>
                                <li>No Collateral: Get financial assistance without risking assets.</li>
                                <li>Immediate Healthcare Access: The loan covers a wide spectrum of medical expenses.
                                </li>
                                <li>Flexible Loan Amounts: Get the loan amount that you need for any medical procedure.
                                </li>
                                <li>Highly Flexible Repayment: Choose a repayment plan that suits your financial
                                    ability.
                                </li>
                            </ul>

                            <h5>Medical Loan EMI Calculator</h5>
                            <p>A medical loan EMI calculator is a tool to help you calculate the monthly instalment
                                amount
                                for the
                                availed loan. Now you can calculate the loan with EMI calculator. Make informed
                                decisions
                                about
                                the loan amount, tenure, and interest rates. Using it can help you plan your finances
                                effectively.</p>

                            <h5>Medical Loan Eligibility Criteria</h5>
                            <p>Rising healthcare costs can put a financial burden on individuals. As a solution, medical
                                loans
                                have addressed this challenge. However, like any other loan, you will have to meet
                                certain
                                medical loan eligibility criteria. These are:</p>
                            <ul>
                                <li>Nationality: Indian</li>
                                <li>Age: 21 - 60</li>
                                <li>Minimum Monthly Income: Rs 20,000</li>
                                <li>CIBIL Score: 750 above</li>
                                <li>Employment: Should be salaried or self-employed.</li>
                            </ul>

                            <h5>Medical Loan Interest Rate & Charges</h5>
                            <p>Medical loans are fundamental in providing a financial solution to any healthcare
                                emergency.
                                Before applying, it is essential to understand the medical loan interest rate and
                                charges
                                imposed by lenders. These rates and charges differ based on the loan amount, repayment
                                tenure,
                                credit score, and the lenders. Some of these charges may also apply to a medical
                                equipment
                                loan
                                but vary from lender to lender.</p>
                            <ul>
                                <li>Interest rate: 8.90% to 25% p.a.</li>
                                <li>Processing Fees: 1% to 6%</li>
                                <li>Prepayment or foreclosure charges: 2% to 5%</li>
                                <li>Late payment charges: 1 to 5% of EMI</li>
                                <li>Other charges: May include documentation charges, loan cancellation charges, or loan
                                    conversion charges.</li>
                            </ul>

                            <h5>Factors Affecting Interest Rate</h5>
                            <p>There are factors that determine the risk associated with lending money for medical
                                purposes.
                                Understanding these factors will help you assess your eligibility and negotiate better
                                terms
                                with a lender. These factors include:</p>
                            <ul>
                                <li>Creditworthiness</li>
                                <li>Income and employment stability</li>
                                <li>Loan amount and tenure</li>
                                <li>Market conditions</li>
                                <li>Lender policies</li>
                            </ul>

                            <h5>Reasons to Avail Medical Loan</h5>
                            <p>Medical emergencies are not time-bound and can be quite expensive. In such cases, you may
                                find
                                yourself in a fix if you do not have adequate finances. Financial aid can be one purpose
                                for
                                taking a personal loan; however, there can be many other reasons, such as:</p>
                            <ul>
                                <li>Medical emergencies: Unexpected emergencies can be a source of stress when you do
                                    not
                                    have
                                    immediate funds. A medical loan can help relieve you of such a burden. You can take
                                    a
                                    loan to
                                    cover hospitalization costs, surgeries, or treatments.</li>
                                <li>Expensive treatments: Certain medical treatments, such as organ transplants,
                                    chemotherapy, or
                                    advanced surgeries, can be financially demanding. A medical loan will allow you to
                                    afford
                                    these high-cost treatments.</li>
                                <li>Health Check-ups and Diagnostic Procedures: Routine health check-ups and diagnostic
                                    tests are
                                    essential for preventive healthcare. You can avail of a medical loan to cover any
                                    comprehensive medical check-up or specialized diagnostic procedures.</li>
                                <li>Dental and Cosmetic Procedures: Dental treatment and cosmetic procedures can cost a
                                    fortune
                                    and often are not covered by insurance. Avail of a medical loan to get dental
                                    implants,
                                    orthodontic treatments, cosmetic surgery, or other aesthetic procedures.</li>
                                <li>Medical equipment and technology: Some medical conditions require an expensive
                                    investment in
                                    medical equipment and technology such as hearing aids, wheelchairs, prosthetics, or
                                    homecare
                                    equipment. A medical loan will help cover the costs of these essential medical
                                    devices.
                                </li>
                            </ul>

                            <h5>Frequently Asked Questions on Medical Loan</h5>
                            <ul>
                                <li><b>What is a medical loan?</b>
                                    <p>A medical loan is financial aid that can be taken specifically to cover medical
                                        expenses. It
                                        helps individuals and families manage the costs of various medical treatments,
                                        procedures,
                                        surgeries, hospital stays, medication, and other healthcare expenses including
                                        medical
                                        procedures.</p>
                                </li>
                                <li><b>Who is eligible for a medical loan?</b>
                                    <p>Any salaried or self-employed individual who is an Indian citizen and is 21 years
                                        and
                                        above
                                        is eligible for a medical loan. They should have a minimum monthly income of at
                                        least Rs
                                        20,000 and a good CIBIL score of 750+.</p>
                                </li>
                                <li><b>Can I take a medical loan for any treatment?</b>
                                    <p>Yes, you can take a medical loan for any medical treatment you need if you
                                        fulfill
                                        the
                                        requirements and eligibility criteria of banks and NBFCs.</p>
                                </li>
                                <li><b>What is the interest rate for medical loans?</b>
                                    <p>The interest rate for medical loans will differ from one lender to another. It
                                        can
                                        range
                                        between 8.90% to 25% p.a. depending on various factors such as the borrower’s
                                        credit
                                        score
                                        and history, loan amount, and tenure.</p>
                                </li>
                                <li><b>How can I apply for a medical loan?</b>
                                    <p>You can apply for an instant health loan through the CredBuddha app or online
                                        through
                                        the
                                        CredBuddha website.</p>
                                </li>
                                <li><b>What does medical loan policy include?</b>
                                    <p>Medical loan policy refers to the guidelines, regulations, and practices followed
                                        by
                                        banks
                                        and financial institutions when giving out medical loans to individuals. It
                                        includes
                                        eligibility criteria, loan amount, interest rate, repayment tenure,
                                        documentation,
                                        processing fees, and loan disbursement.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-category">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="marriage.html">Marriage Loan <i class="icofont-arrow-right"></i></a></li>
                                <li><a href="business.html">Business Loan <i class="icofont-arrow-right"></i></a></li>
                                <li><a href="car.html">Car Loan <i class="icofont-arrow-right"></i></a></li>
                                <li><a href="bike.html">Bike Loan <i class="icofont-arrow-right"></i></a></li>
                                <li><a href="education.html">Education Loan <i class="icofont-arrow-right"></i></a></li>
                                <li><a href="medical.html">Medical Loan <i class="icofont-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Blog Destails Area End -->

        <!-- Newsletter Section Start -->
        <div class="newsletter-section">
            <div class="container">
                <div class="newsletter-area">
                    <h5>Subscribe Our Newsletter</h5>
                    <div class="col-lg-6 offset-lg-3 p-0">
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                                required autocomplete="off">

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
                                <a href="index.html">
                                    <img src="<?php echo base_url(); ?>assets/img/logo-two.png" alt="logo" height="60px">
                                </a>
                            </div>
                            <p>Our platform encourages wise decision-making, prioritizing selections that lead to
                                greater
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
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>s
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