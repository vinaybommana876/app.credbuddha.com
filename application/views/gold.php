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
    <title>Credbuddha | Gold Loan</title>

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
                    <div class="btn col-md-4 p-0"><button class=" btn btn-rounded btn-primary electronics-btn"
                            type="submit"><a href="<?php echo base_url(); ?>form">
                                Apply Now</a>
                        </button></div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="text-center mb-4"><u>Gold Loan </u>
                            <a href="#"><img src="<?php echo base_url(); ?>assets/img/loans/Goldloan.webp"
                                    alt="loan-img"></a>
                        </h3>
                        <p>Seeking to apply for a gold loan? Explore CredBuddha, your ultimate loan aggregator for
                            hassle-free
                            gold loans in India. Unlock the value of your gold <?php echo base_url(); ?>assets with our
                            attractive interest rates
                            starting
                            from just 11.99% p.a. Using CredBuddha, securing a gold loan is straightforward – simply
                            pledge
                            your
                            gold, whether ornaments, jewellery, or coins, as collateral. Benefit from flexible repayment
                            options
                            tailored to suit your convenience.</p>

                        <h5>Gold Loan Providers Comparison on CredBuddha</h5>

                        <h5>Top Banks Offering Gold Loans</h5>
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
                                        <td>Starting from 9.90% p.a.</td>
                                        <td>Up to 24 months</td>
                                        <td>1.5% + GST</td>
                                    </tr>
                                    <tr>
                                        <td>ICICI Bank</td>
                                        <td>From 11% p.a.</td>
                                        <td>Up to 12 months</td>
                                        <td>1% of the loan amount</td>
                                    </tr>
                                    <tr>
                                        <td>Canara Bank</td>
                                        <td>Starting from 7.65% p.a.</td>
                                        <td>Up to 2 years</td>
                                        <td>0.25% of the loan amount</td>
                                    </tr>
                                    <tr>
                                        <td>Axis Bank</td>
                                        <td>From 12.50% p.a.</td>
                                        <td>Up to 3 years</td>
                                        <td>1% plus GST</td>
                                    </tr>
                                    <tr>
                                        <td>State Bank of India (SBI)</td>
                                        <td>Starting from 7.50% p.a.</td>
                                        <td>Up to 36 months</td>
                                        <td>0.25% + GST</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h5>Top NBFCs Offering Gold Loans</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NBFC</th>
                                        <th>Interest Rate (p.a.)</th>
                                        <th>Loan Tenure</th>
                                        <th>Processing Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Muthoot Finance</td>
                                        <td>Starting from 12% p.a.</td>
                                        <td>Up to 36 months</td>
                                        <td>0.25% to 1% of the loan amount</td>
                                    </tr>
                                    <tr>
                                        <td>IIFL</td>
                                        <td>From 9.24% p.a.</td>
                                        <td>3 to 11 months</td>
                                        <td>Exact fee not available</td>
                                    </tr>
                                    <tr>
                                        <td>Manappuram Finance</td>
                                        <td>Starting from 9.90% p.a.</td>
                                        <td>Flexible tenure</td>
                                        <td>During loan settlement</td>
                                    </tr>
                                    <tr>
                                        <td>Bajaj Finance</td>
                                        <td>From 14% p.a.</td>
                                        <td>6 to 36 months</td>
                                        <td>1.90%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container d-md-flex align-items-center justify-content-around p-3 my-5 rounded my-2 text-center"
                            style="border: 1px solid #ddd;">
                            <div class="col-md-1">
                                <img src="<?php echo base_url(); ?>assets/img/coin.png" alt="image" width="50px">
                            </div>
                            <div class="col-md-8">
                                <h3 class="d-block p-0 m-0 ">Apply for Gold Loan</h3>
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
                        <h5>Features & Benefits of Gold Loan through CredBuddha</h5>
                        <ul>
                            <li><strong>Quick Approval:</strong> Get your loan approved within minutes.</li>
                            <li><strong>Flexible Repayment:</strong> Choose a tenure that suits you.</li>
                            <li><strong>Lower Interest Rates:</strong> Starting from 7.50% p.a., ensuring affordable
                                loans.</li>
                            <li><strong>Extended Repayment Tenure:</strong> Up to 60 months for larger loans.</li>
                            <li><strong>No Prepayment Penalties:</strong> Transparent terms with no hidden charges.</li>
                        </ul>

                        <h5>Gold Loan Interest Rates, Fees & Charges</h5>
                        <ul>
                            <li><strong>Interest Rates:</strong> Typically range from 7.50% p.a. to 12.50% p.a.</li>
                            <li><strong>Processing Fee:</strong> A flat fee of 0.5% of the loan amount.</li>
                            <li><strong>Valuation Fee:</strong> Applicable for assessing the value of the pledged gold.
                            </li>
                            <li><strong>Penal Charges:</strong> Applicable in case of default or late payment.</li>
                            <li><strong>Foreclosure Charges:</strong> May apply if you choose to repay the loan before
                                the end of the tenure.</li>
                            <li><strong>Stamp Duty Charges:</strong> As per state norms.</li>
                            <li><strong>Late Payment Charges:</strong> Applicable if you miss the due date for
                                repayment.
                                These details provide a clear overview of the benefits, interest rates, and charges
                                associated with taking a Gold Loan through CredBuddha. Always verify the specific terms
                                and conditions with the lender before proceeding with the loan application.</li>
                        </ul>


                        <h5>Factors Affecting Gold Loan Interest Rates</h5>
                        <ul>
                            <li><strong>Loan-to-Value (LTV) Ratio:</strong> Higher LTV ratios can lead to competitive
                                interest
                                rates.</li>
                            <li><strong>Gold Purity:</strong> Higher-purity gold attracts better interest rates.</li>
                            <li><strong>Loan Tenure:</strong> Longer tenures may slightly affect interest rates.</li>
                            <li><strong>Market Conditions:</strong> Rates are influenced by market fluctuations.</li>
                            <li><strong>Borrower's Credit Profile:</strong> While secured, credit history may impact
                                rates.
                            </li>
                        </ul>

                        <h5>Eligibility Criteria for Gold Loan</h5>
                        <p>Criteria include age (18 to 75 years), profession (salaried, self-employed, businessman),
                            acceptable
                            gold articles (jewellery, ornaments, coins), minimum gold purity (18 carats & above), and
                            Loan
                            To
                            Value (LTV) up to 90%.</p>

                        <h5>Documents Required for Gold Loan</h5>
                        <p>Standard documents include identity proof (PAN, Aadhaar, etc.), income proof (salary slips,
                            bank
                            statements), and address proof (Aadhaar, utility bills).</p>
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
                            <h6>1. What is a gold loan?</h6>
                            <p>A gold loan is a secured loan where gold jewellery or ornaments are pledged as collateral
                                in exchange for funds from a lender.</p>

                            <h6>2. What are the eligibility criteria to apply for a gold loan?</h6>
                            <p>Eligibility criteria usually include age (18 years and above), ownership of gold that
                                meets purity standards set by the lender, and KYC (Know Your Customer) documentation.
                            </p>

                            <h6>3. What documents are required to apply for a gold loan?</h6>
                            <p>Commonly required documents include identity proof (Aadhaar card, passport, etc.),
                                address proof, photographs, and ownership proof of the gold (receipts or bills if
                                available).</p>

                            <h6>4. What is the tenure for repayment of a gold loan?</h6>
                            <p>Gold loans usually have flexible repayment options ranging from a few months to a few
                                years. The exact tenure can vary depending on the lender and the borrower's preferences.
                            </p>

                            <h6>5. What happens if I am unable to repay the gold loan on time?</h6>
                            <p>If you are unable to repay the loan within the specified tenure, the lender has the right
                                to auction off the gold to recover the outstanding amount. It's crucial to communicate
                                with the lender to explore options before defaulting.</p>

                            <h6>6. Can I extend the repayment period of my gold loan?</h6>
                            <p>Some lenders may offer options to extend the tenure by paying additional fees or
                                interest. However, this varies by lender, and it's advisable to check the terms and
                                conditions beforehand.</p>

                            <h6>7. What are the interest rates for gold loans?</h6>
                            <p>Interest rates for gold loans typically range from around 7.50% p.a. to 12.50% p.a.,
                                depending on the lender, loan amount, and tenure.</p>

                            <h6>8. Are there any additional charges or fees for a gold loan?</h6>
                            <p>Yes, additional charges may include processing fees (usually a percentage of the loan
                                amount), valuation fees for assessing the purity and value of the gold, penal charges
                                for defaults, foreclosure charges if the loan is closed before the agreed tenure, and
                                stamp duty charges as per state regulations.</p>
                        </ul>

                    </div>

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
                            <p>Our platform encourages wise decision-making, prioritizing selections that
                                lead to greater
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
                                <li><a href="<?php echo base_url(); ?>tnc">Terms & Conditions</a></li>
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