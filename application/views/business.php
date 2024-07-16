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
    <title>Credbuddha | Business Loan</title>

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
            <a href="<?php echo base_url(); ?>index.php" class="logo">
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
                                    Blog</a>

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
        <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="Personal Loan" title="Personal Loan" class="" width="50px !important" dis>
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
        <div class="container mt-5">
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
                    <div class="btn col-md-4 p-0"><a href="<?php echo base_url(); ?>form"><button
                                class=" btn btn-rounded btn-primary electronics-btn" type="submit">
                                Apply Now
                            </button></a></div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="container">
                            <h3 class="text-center mb-4"><u> Business Loan </u></h3>
                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/loans/BusinessLoan.webp"
                                    alt="loan-img"></a>

                            <!-- Insert your image here -->
                            <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="Personal Loan" title="Personal Loan" class="" width="50px !important">

                            <p>CredBuddha is your trusted loan aggregator for securing hassle-free business loans
                                online. We specialize in connecting entrepreneurs with the best loan options tailored to
                                their needs, ensuring financial growth and efficiency for their business ventures. In
                                today’s dynamic market, quick and reliable funding is crucial for both startups and
                                established businesses.</p>

                            <div class="container-fluid d-md-flex align-items-center justify-content-around p-3 my-5 rounded my-2 text-center"
                                style="border: 1px solid #ddd;">
                                <div class="col-md-1">
                                    <!-- Insert your image here -->
                                    <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="Personal Loan" title="Personal Loan" class="" width="50px !important" dis>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="d-block p-0 m-0">Apply for Business Loan</h3>
                                    <p class="p-0 m-0">Get Instant Approval<span class="text-primary"><a
                                                href="<?php echo base_url(); ?>form">Apply now</a></span>
                                    </p>
                                </div>
                                <div class="btn col-md-4 p-0">
                                    <button class="btn btn-rounded btn-primary electronics-btn" type="submit">
                                        <a href="<?php echo base_url(); ?>form">Apply Now</a>
                                    </button>
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

                            <h3>Top NBFCs:</h3>
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
                                            <td>Bajaj Finserv</td>
                                            <td>Starts from 15% p.a.</td>
                                            <td>Up to 3% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Tata Capital</td>
                                            <td>Starts from 12% p.a.</td>
                                            <td>2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>HDFC Credila Financial Services</td>
                                            <td>Starts from 14% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Aditya Birla Finance</td>
                                            <td>Starts from 13% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>L&T Finance</td>
                                            <td>Starts from 14% p.a.</td>
                                            <td>2% to 2.5% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Muthoot Finance</td>
                                            <td>Starts from 13% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Shriram City Union Finance</td>
                                            <td>Starts from 14% p.a.</td>
                                            <td>1% to 2.5% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Fullerton India</td>
                                            <td>Starts from 14% p.a.</td>
                                            <td>Up to 6.5% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>IIFL Finance</td>
                                            <td>Starts from 15% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Indiabulls Commercial Credit</td>
                                            <td>Starts from 14% p.a.</td>
                                            <td>1.5% to 3% of the loan amount</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <!-- Top Banks Table -->
                            <h3>Top Banks:</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Bank</th>
                                            <th>Interest Rate (p.a.)</th>
                                            <th>Processing Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>State Bank of India (SBI)</td>
                                            <td>Starts from 9.50% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>HDFC Bank</td>
                                            <td>Starts from 11.90% p.a.</td>
                                            <td>Up to 2.5% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>ICICI Bank</td>
                                            <td>Starts from 12.00% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Axis Bank</td>
                                            <td>Starts from 10.75% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Kotak Mahindra Bank</td>
                                            <td>Starts from 11.50% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Bank of Baroda</td>
                                            <td>Starts from 10.00% p.a.</td>
                                            <td>Up to 1% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Punjab National Bank (PNB)</td>
                                            <td>Starts from 8.95% p.a.</td>
                                            <td>Up to 1% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>IDFC First Bank</td>
                                            <td>Starts from 12.00% p.a.</td>
                                            <td>Up to 2% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Yes Bank</td>
                                            <td>Starts from 11.50% p.a.</td>
                                            <td>Up to 2.5% of the loan amount</td>
                                        </tr>
                                        <tr>
                                            <td>Union Bank of India</td>
                                            <td>Starts from 9.80% p.a.</td>
                                            <td>Up to 1% of the loan amount</td>
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
                                <li>Age: 24-58 years</li>
                                <li>Citizenship: Indian</li>
                                <li>Employment: Stable income source</li>
                                <li>Work Experience: 6-24 months</li>
                                <li>Monthly Income: ₹15,000</li>
                            </ul>

                            <h5>Required Documents</h5>
                            <p>For salaried employees and self-employed individuals, standard identification, residence,
                                and
                                income proofs are needed.</p>

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
                                <h6>1. How quickly can I get loan approval?</h6>
                                <p>Approval times can vary by lender, but many of our partner lenders offer fast
                                    approvals,
                                    often within minutes once your application is complete and verified.</p>

                                <h6>2. What are the eligibility criteria for applying for a loan?</h6>
                                <p>Eligibility criteria vary depending on the lender. Common factors include your age,
                                    income, employment status, and credit history. Each lender’s specific requirements
                                    will
                                    be detailed during the application process.</p>

                                <h6>3. What is the minimum salary requirement for a loan?</h6>
                                <p>The minimum salary requirement usually starts from ₹10,000 per month. However, this
                                    can
                                    differ among lenders. Please check the specific requirements for each loan product.
                                </p>

                                <h6>4. Can I get a loan without providing income proof?</h6>
                                <p>Yes, some lenders offer loans without requiring income proof, but these are subject
                                    to
                                    specific conditions and may have higher interest rates. Check the lender's
                                    conditions to
                                    see if you qualify.</p>

                                <h6>5. What types of loans are available through your platform?</h6>
                                <p>Our platform connects you with various types of loans, including personal loans, home
                                    loans, business loans, education loans, and more. Each loan type has different terms
                                    and
                                    conditions.</p>

                                <h6>6. Are there any processing fees or hidden charges?</h6>
                                <p>Processing fees and charges depend on the lender and the loan type. All applicable
                                    fees
                                    will be clearly disclosed during the application process, ensuring transparency.</p>

                                <h6>7. How do I compare loan offers from different lenders?</h6>
                                <p>Our platform allows you to compare loan offers based on interest rates, loan amounts,
                                    repayment terms, and fees. Use our comparison tools to find the best loan for your
                                    needs.</p>

                                <h6>8. What documents do I need to apply for a loan?</h6>
                                <p>Required documents vary by lender but typically include proof of identity, address,
                                    and
                                    income. Some lenders may require additional documents based on their policies.</p>

                                <h6>9. How do I apply for a loan through your platform?</h6>
                                <p>To apply, select your desired loan type, fill out the online application form, upload
                                    any
                                    required documents, and submit your application. Our platform will match you with
                                    suitable lenders.</p>

                                <h6>10. Can I get assistance if I have trouble applying for a loan?</h6>
                                <p>Yes, our customer support team is here to help. If you encounter any issues or have
                                    questions during the application process, please contact us via phone, email, or
                                    live
                                    chat.</p>
                            </ul>
                        </div>
                    </div>

                    <!-- Sidebar Content -->
                    <div class="col-lg-4">
                        <div class="blog-category">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>marriage">Marriage Loan <i
                                            class="icofont-arrow-right"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>business">Business Loan <i
                                            class="icofont-arrow-right"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>car">Car Loan <i
                                            class="icofont-arrow-right"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>bike">Bike Loan <i
                                            class="icofont-arrow-right"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>education">Education Loan <i
                                            class="icofont-arrow-right"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>medical">Medical Loan <i
                                            class="icofont-arrow-right"></i></a></li>
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
                                <a href="<?php echo base_url(); ?>index.php">
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