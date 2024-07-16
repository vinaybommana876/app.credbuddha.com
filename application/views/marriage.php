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
                                <a href="<?php echo base_url(); ?>index.php"
                                    class="nav-link dropdown-toggle active">Home</a>
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
                                        <a href="<?php echo base_url(); ?>personal"
                                            class="nav-link dropdown-toggle">
                                            Personal Loan
                                            <i class="flaticon-right-chevron"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>marriage"
                                                    class="nav-link">Marriage Loan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>personal"
                                                    class="nav-link">Personal Loan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>travel"
                                                    class="nav-link">Travel Loan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo base_url(); ?>medical"
                                                    class="nav-link">Medical Loan</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>business" class="nav-link">Business
                                            Loan</a>
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
                                        <a href="<?php echo base_url(); ?>education"
                                            class="nav-link ">Education Loan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>gold" class="nav-link ">gold
                                            Loan</a>
                                    </li>



                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>creditscore" class="nav-link">Free Credit
                                    score</a>

                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>about" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>bloghome" class="nav-link"
                                >Blog</a>

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
                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/google-play-badge.png"
                                alt="store-icon" width="190px"></a>
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
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/1.jpg"
                                                        alt="home one">
                                                </a>
                                                <h3><a href="index.html">Home One</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="index-two.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/2.jpg"
                                                        alt="home one">
                                                </a>
                                                <h3><a href="index-two.html">Home Two</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="about.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/3.jpg"
                                                        alt="home one">
                                                </a>
                                                <h3><a href="about.html">About</a></h3>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="modal-link">
                                                <a href="service.html">
                                                    <img src="<?php echo base_url(); ?>assets/img/modal/4.jpg"
                                                        alt="home one">
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
                <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Minimal Documentation"
                    class="stick_vector">
                <p class="para_content p-0 m-0 mx-2">Minimal Documentation</p>
                <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="No Collateral" class="stick_vector">
                <p class="para_content p-0 m-0 mx-2">No Collateral</p>
            </div>
        </div>
        <div class="sticky_btn">
            <a href="<?php echo base_url(); ?>form">
                <div class="cta-Button">
                    <button class="redirect btn_apply_new_ui" id="stickyfooter_apply_btn">Apply Now</button>
                </div>
            </a>
        </div>
    </div>
    <!-- Mobile -->
    <div class="second-sticky-footer p-3 d-flex justify-content-center align-items-center">
        <!-- <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="Personal Loan" title="Personal Loan" class="" width="50px !important" dis> -->
        <div class="text-center">
            <p class="para_sticky m-0" style="font-size: 12px;">Get Instant Loan Online up to ₹50 Lakhs</p>
            <div class="vector_div p-0 m-0">
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Instant Disbursal"
                        class="stick_vector">
                    <p class="para_content p-0 m-0 mx-2" style="font-size: 10px;">Instant Disbursal</p>
                </div>
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="Minimal Documentation"
                        class="stick_vector">
                    <p class="para_content p-0 m-0 mx-2" style="font-size: 10px;">Minimal Documentation</p>

                </div>
                <div>
                    <img src="<?php echo base_url(); ?>assets/img/tick.jpg" alt="No Collateral" class="stick_vector">
                    <p class="para_content p-0 m-0 mx-2" style="font-size: 10px;">No Collateral</p>
                </div>
            </div>
        </div>
        <div class="sticky_btn">
            <a href="<?php echo base_url(); ?>form">
                <div class="cta-Button">
                    <button class="redirect btn_apply_new_ui" id="stickyfooter_apply_btn">Apply Now</button>
                </div>
            </a>
        </div>
    </div>

    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="container mt-5">
                <div class="container d-md-flex align-items-center justify-content-around p-3 my-5 rounded my-2 text-center"
                    style="border: 1px solid #ddd;">
                    <div class="col-md-1">
                        <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="image" width="50px">
                    </div>
                    <div class="col-md-8">
                        <h3 class="d-block p-0 m-0 ">Apply for instant Personal Loan</h3>
                        <p class="p-0 m-0">Get Instant Personal At your Door Step <span class="text-primary"><a
                                    href="<?php echo base_url(); ?>form">Apply
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
                            <h3 class="text-center mb-4 mt-4"><u>Marriage Loan</u></h3>
                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/loans/Marriageloan.webp"
                                    alt="loan-img"></a>
                            <p>A marriage loan, also known as a wedding loan, is a convenient way to manage the
                                financial requirements of a wedding. It helps cover the costs of planning a grand
                                celebration, easing the financial burden. CredBuddha offers a simple and efficient
                                application and approval process, making it easier to finance your wedding expenses.</p>

                            <h5>Explore Loan Options</h5>
                            <ul>
                                <li>NBFCs (Non-Banking Financial Companies)</li>
                                <li>Banks</li>
                            </ul>

                            <div class="container-fluid d-md-flex align-items-center justify-content-around p-3 my-5 rounded my-2 text-center"
                                style="border: 1px solid #ddd;">
                                <div class="col-md-1">
                                    <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="image" width="50px">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="d-block p-0 m-0 ">Apply for Marriage Loan</h3>
                                    <p class="p-0 m-0">Get a Marriage Loan At Your Doorstep <span
                                            class="text-primary"><a href="<?php echo base_url(); ?>form">Apply
                                                now</a></span></p>
                                </div>
                                <div class="btn col-md-4 p-0">
                                    <button class="btn btn-rounded btn-primary electronics-btn" type="submit"><a
                                            href="<?php echo base_url(); ?>form">Apply
                                            Now</a></button>
                                </div>
                            </div>

                            <h5>Features & Benefits</h5>
                            <ul>
                                <li>No Hidden Charges: Transparent terms and conditions.</li>
                                <li>Online Process: Fully digital application process.</li>
                                <li>Zero Collateral: No need to pledge any <?php echo base_url(); ?>assets.</li>
                                <li>Competitive Interest Rates: Affordable rates to suit your needs.</li>
                                <li>Quick Approval: Immediate access to funds.</li>
                                <li>No Prepayment Penalties: Flexibility to repay early without extra charges.</li>
                            </ul>

                            <h5>Top NBFCs Providing Marriage Loan</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NBFC</th>
                                            <th>Interest Rate (p.a.)</th>
                                            <th>Processing Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Muthoot Finance</td>
                                            <td>14% onwards</td>
                                            <td>Up to 3.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Tata Capital</td>
                                            <td>10.99% onwards</td>
                                            <td>Up to 2.75%</td>
                                        </tr>
                                        <tr>
                                            <td>Bajaj Finserv</td>
                                            <td>11% onwards</td>
                                            <td>Up to 3.93%</td>
                                        </tr>
                                        <tr>
                                            <td>StashFin</td>
                                            <td>11.99% onwards</td>
                                            <td>Up to 10%</td>
                                        </tr>
                                        <tr>
                                            <td>Faircent</td>
                                            <td>9.99% onwards</td>
                                            <td>Up to 8%</td>
                                        </tr>
                                        <tr>
                                            <td>KreditBee</td>
                                            <td>Up to 29.95%</td>
                                            <td>Up to 6%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5>Top Banks Providing Marriage Loan</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Bank</th>
                                            <th>Interest Rate (p.a.)</th>
                                            <th>Loan Tenure</th>
                                            <th>Processing Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HDFC Bank</td>
                                            <td>10.50% - 21.00%</td>
                                            <td>12 - 60 months</td>
                                            <td>Up to 2.5%</td>
                                        </tr>
                                        <tr>
                                            <td>Yes Bank</td>
                                            <td>10.00% onwards</td>
                                            <td>12 - 60 months</td>
                                            <td>Up to 2.5% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>IDFC First</td>
                                            <td>10.49% onwards</td>
                                            <td>3 - 60 months</td>
                                            <td>Up to 3.5% of the loan amount</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5>Comparing NBFCs and Banks</h5>
                            <ul>
                                <li>Interest Rates: Generally lower at banks.</li>
                                <li>Loan Amounts: Higher at banks.</li>
                                <li>Processing Fees: Potentially lower at banks.</li>
                                <li>Approval Speed: Faster with NBFCs.</li>
                                <li>Eligibility Criteria: More flexible with NBFCs.</li>
                                <li>Documentation: Minimal with NBFCs.</li>
                            </ul>

                            <h5>Eligibility Criteria</h5>
                            <ul>
                                <li>Age: 21-65 years</li>
                                <li>Monthly Income: ₹15,000 - ₹25,000</li>
                                <li>Employment Type: Salaried and self-employed are eligible</li>
                                <li>Employment Status: Salaried - 2 years, Self-employed - 1 year</li>
                                <li>Credit Score: 700-900</li>
                            </ul>

                            <h5>Required Documents</h5>
                            <p>To apply for a marriage loan, you need the following documents:</p>
                            <ul>
                                <li>Identity proof: Passport, driver's license, Aadhaar card, Voter ID</li>
                                <li>Address proof: Utility bill (electricity, water, or gas), bank statement</li>
                                <li>Income proof: Recent payslips, Income Tax Returns (IT returns)</li>
                                <li>Photographs: Recent passport-sized photographs</li>
                            </ul>
                            <h5>Steps to Apply for a Loan</h5>
                            <ol>
                                <li><b>Click on "Apply For Loan"</b> Start your application by clicking the "Apply For
                                    Loan"
                                    button</li>
                                <li><b>Fill Out Step 1:</b> Enter your Name, Mobile
                                    Number,
                                    Employment Type, Salary, and Pincode. Click "Next".</li>
                                <li><b>Fill Out Step 2:</b> Provide details about your Salary Type, Company Name, and
                                    Desired Loan Amount. Click "Next"</li>
                                <li><b>Fill Out Step 3:</b> Enter your PAN Number, Date of Birth, Gender, and Email
                                    Address.
                                    Click "Next".</li>
                                <li><b> Fill Out Step 4:</b> Enter your Address, Locality, City, and State. Click
                                    "Submit".
                                </li>
                            </ol>
                            <h5 class="mb-4">Frequently Asked Questions</h5>
                            <ul>
                                <li>
                                    <h6>What is a marriage loan?</h6>
                                    <p>A marriage loan, also known as a wedding loan, is a type of personal loan
                                        designed to cover the expenses associated with a wedding ceremony and related
                                        celebrations.</p>
                                </li>

                                <li>
                                    <h6>What expenses can a marriage loan cover?</h6>
                                    <p>Marriage loans can typically cover a wide range of expenses, including venue
                                        rental, catering, decorations, bridal attire, photography, and honeymoon costs.
                                    </p>
                                </li>

                                <li>
                                    <h6>How does a marriage loan work?</h6>
                                    <p>You apply for a marriage loan through a financial institution like CredBuddha.
                                        Upon approval, you receive a lump sum amount which you repay in fixed
                                        installments over a specified period, including applicable interest.</p>
                                </li>

                                <li>
                                    <h6>What are the eligibility criteria for a marriage loan?</h6>
                                    <p>Eligibility criteria may include factors such as your income, credit score,
                                        employment status, and age. Specific requirements may vary by lender.</p>
                                </li>

                                <li>
                                    <h6>How can I apply for a marriage loan through CredBuddha?</h6>
                                    <p>You can start your application process by visiting CredBuddha's website or app,
                                        filling out the online application form and submitting it.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="blog-category">
                        <h3>Category</h3>

                        <ul>
                            <li>
                                <a href="<?php echo base_url(); ?>marriage">
                                    Marriage Loan
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>business">
                                    Business Loan
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>car">
                                    Car Loan
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>bike">
                                    Bike Loan
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>education">
                                    Education Loan
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>medical">
                                    Medical Loan
                                    <i class="icofont-arrow-right"></i>
                                </a>
                            </li>
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
                                    <img src="<?php echo base_url(); ?>assets/img/logo-two.png" alt="logo"
                                        height="60px">
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