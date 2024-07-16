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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style2.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <!-- Title CSS -->
    <title>Credbuddha | Loan Form</title>

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
    <style>
        body {
            font-family: "Chivo", sans-serif;
        }

        * {
            /* Selection */
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .com {
            color: #32a89d;
        }

        .main_question {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #32a89d;
        }

        .box {
            width: 100%;
            padding: 10px 30px;
            border-radius: 4px;
            font-size: 15px;
            color: #000;
        }

        .box1 {
            width: 100%;
            padding: 5px 5px;
            border-radius: 18px;
            font-size: 15px;
            color: #000;
        }

        .space {
            padding-top: 3%;
        }

        .button {
            margin: 5%;
        }

        .button {
            padding: 5px 30px;
            border: 1px solid black;
            cursor: pointer;
            border-radius: 18px;

        }

        input[type="radio"]:checked+label {
            background-color: #32a89d;
            color: #fff;
        }

        input[type="radio"] {
            transform: scale(1.5);
            margin: 2% 3%;
        }

        select {
            width: 100%;
            padding: 10px 30px;
            border-radius: 15px;
            font-size: 15px;
            color: black;
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
        }

        legend {
            color: #333;
            font-size: small;
        }

        .name {
            padding: 3px;
            border-radius: 18px;
            color: #000;
        }

        .input-container {
            display: inline-block;
        }

        .input-container label {
            display: block;
        }

        p {
            font-size: 80%;
        }

        figure {
            display: none;
        }

        @media (max-width: 1080px) {
            figure {
                display: block;
            }

            /* .navbar-toggler{
            display: none;
        } */
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="radio"].error {
            border: 2px solid red;
        }

        input[type="radio"].required {
            border: 2px solid orange;
        }

        #radio-group1,
        #radio-group2,
        #radio-group3,
        #radio-group4,
        #radio-group5,
        #radio-group6,
        #radio-group7,
        #radio-group8,
        #radio-group9 {
            font-weight: 700;
            font-size: 15px
        }

        #otp-div {
            display: none;
        }

        .optionbox {
            border: 2px solid #000;
            width: 100%;
            padding: 10px 30px;
            border-radius: 10px;
            font-size: 15px;
            color: #000;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
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
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
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
                                <a href="<?php echo base_url(); ?>bloghome" class="nav-link">Blog</a>

                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>contact" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/google-play-badge.png"
                                alt="store-icon" width="190px"></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Mobile -->

    <div class="container-fluid full-height">
        <div class="row row-height">
            <div id="carouselExampleIndicators" class="carousel slide col-lg-6 content-left"
                style="background-size: cover; background-position: center; background-repeat: no-repeat;"
                data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url(); ?>assets/img/1.webp" class="d-block w-100" class="img-fluid"
                            style="background-size: contain;">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url(); ?>assets/img/2.webp" class="d-block w-100" class="img-fluid"
                            style="background-size: contain;">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url(); ?>assets/img/3.webp" class="d-block w-100" class="img-fluid"
                            style="background-size: contain;">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </a>
            </div>
            <!-- /content-left -->

            <div class="col-lg-6 content-right" id="start">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <h1 class="main_question" style="font-weight: 600; text-align: center; color: #55B018;">Apply &
                        Get Loan
                        Approved Instantly</h1><br>
                    <!-- /top-wizard -->
                    <form id="wrapped" method="POST" action="<?php echo base_url('camp/process_form'); ?>">

                        <div id="middle-wizard">
                            <div class="step active" id="step0">
                                <div class="form-group">
                                    <div class="number mt-2 floating-label">
                                        <?php if (!isset($_GET['m'])): ?>
                                            <label>Mobile Number</label>
                                            <input type="number" id="num" class="box" name="mobile"
                                                value="<?php echo @$_GET['m']; ?>" placeholder="Mobile Number"
                                                pattern="[6789][0-9]{9}">
                                        <?php endif; ?>
                                    </div>
                                    <div class="number mt-2">
                                        <label>Loan Amount</label>
                                        <input type="number" class="box" name="loan"
                                            placeholder="Enter Your Loan Amount">
                                    </div>
                                    <div class="email mt-2">
                                        <label>Personal Email Address</label>
                                        <input type="email" class="box" name="email" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="step active" id="step1">
                                <div class="form-group">
                                    <div class="number mt-2 floating-label">
                                        <label>Mobile Number</label>
                                        <input type="number" id="num_step0" class="box" name="mobile_1"
                                            placeholder="Mobile Number" readonly>
                                    </div>
                                    <div class="number mt-2 mb-2" id="otp-div">
                                        <label>OTP</label>
                                        <input type="number" class="box" name="otp" id="otp" placeholder="Enter your otp">
                                        <button type="button" class="btn btn-primary mt-2 mb-2" id="resend-otp"
                                            style="flex: none; float: right;height: 35px;text-align: center;font-size: 15px;"
                                            onclick="resend()">Resend OTP</button>
                                    </div>
                                    <div class="number mt-4">
                                        <label>Loan Amount</label>
                                        <input type="number" class="box" id="loanstep0" name="loan_1"
                                            placeholder="Enter Your Loan Amount" readonly>
                                    </div>
                                    <div class="email mt-2">
                                        <label>Personal Email Address</label>
                                        <input type="email" class="box" name="email_1" id="email_step0"
                                            placeholder="Enter Your Email" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- step 2 -->
                            <div class="step" id="step2">

                                <div class="form-group">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <label id="radio-group1">What type of Loan?</label>
                                            <div class="err"></div>
                                        </div>
                                        <div class="optionbox p-2 mt-4"><label for="chequee" style="text-wrap: nowrap;">
                                                <input type="radio" id="option2" name="options" value="Personal_Loan"
                                                    class="required optionbox">Personal Loan
                                            </label></div>
                                        <div class=" optionbox p-2 mt-4"><label for="cash" style="text-wrap: nowrap;">
                                                <input type="radio" id="option3" name="options" value="Business_Loan"
                                                    class="optionbox">
                                                Business Loan</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- step 3 -->
                            <div class="step" id="step3">
                                <div class="form-group">
                                    <div class="">

                                        <div class="d-flex justify-content-between">
                                            <label id="radio-group2">What is your Employement Type?</label>
                                            <div class="err"></div>
                                        </div>
                                        <div class="optionbox mt-4"><label for="chequee" style="text-wrap: nowrap;">
                                                <input type="radio" id="option4" name="employee_type"
                                                    value="SALARIED">Salaried
                                            </label></div>
                                        <div class="optionbox mt-3"><label for="cash" style="text-wrap: nowrap;">
                                                <input type="radio" id="option5" name="employee_type"
                                                    value="SELF-EMPLOYEE">
                                                Self-Employed</div>
                                        <div class="optionbox mt-3"><label for="cash" style="text-wrap: nowrap;">
                                                <input type="radio" id="option6" name="employee_type" value="Student">
                                                Student</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- step 4 -->
                            <div class="step" id="step4">
                                <div class="form-group">
                                    <div class="">
                                        <div class="d-flex justify-content-between">
                                            <label id="radio-group3">Choose Salary Mode</label>
                                            <div class="err"></div>
                                        </div>
                                        <div class="optionbox  mt-4"><label for="chequee" style="text-wrap: nowrap;">
                                                <input type="radio" id="option7" name="options2"
                                                    value="Salary_in_Bank">Salary in Bank
                                            </label></div>
                                        <div class="optionbox mt-3"><label for="cash" style="text-wrap: nowrap;">
                                                <input type="radio" id="option8" name="options2" value="Salary_in_Cash">
                                                Salary in Cash</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->
                            <!-- step-5 -->
                            <div class="step" id="step5">
                                <div class="form-group">
                                    <div class="">
                                        <div class="d-flex justify-content-between">
                                            <label id="radio-group4">What is Your Profession Type?</label>
                                            <div class="err"></div>
                                        </div>
                                        <label class="mt-3">My Profession Is</label>
                                        <select id="inputState1" class="form-select optionbox" name="Profession">
                                            <option value="" selected disabled hidden>Select Our Profession </option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Small_Business_Owner">Small Business Owner</option>
                                            <option value="Driver/House_Help">Driver/House Help</option>
                                            <option value="Daily_Wage_Employee">Daily Wage Employee</option>
                                            <option value="Electrician/Plumber/Skilled_Worker">
                                                Electrician/Plumber/Skilled Worker</option>
                                            <option value="CA/CS/ICWA/CS">CA/CS/ICWA/CS</option>
                                            <option value="Architect/Interior_Designer">Architect/Interior Designer
                                            </option>
                                            <option value="Lawyer/Paralegal">Lawyer/Paralegal</option>
                                            <option value="Contractual_Employees">Contractual Employees</option>
                                            <option value="Actor/Influencer/Director/Photographer/Media_Industry">
                                                Actor/Influencer/Director/Photographer/Media Industry</option>
                                            <option value="Blogger/Journalist">Blogger/Journalist</option>
                                            <option value="Freelancers">Freelancers</option>
                                            <option value="Delivery_Executive">Delivery Executive</option>
                                            <option value="Insurance/Property_Agent">Insurance/Property Agent</option>
                                            <option value="Nutritionist/Health&Wellness_Trainer">Nutritionist/ Health &
                                                Wellness Trainer</option>
                                            <option value="Teacher/Professor/Lecture">Teacher/ Professor/Lecture
                                            </option>
                                            <option value="Fashion/Textile_Designer">Fashion/Textile Designer</option>
                                            <option value="Agriculturist">Agriculturist</option>
                                            <option value="House_Wife">House Wife</option>
                                            <option value="Engineer">Engineer</option>
                                            <option value="Others">Others</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                            <!-- /step-->
                            <!-- step-6 -->
                            <div class="step" id="step6">
                                <div class="form-group">
                                    <div class="">
                                        <label id="radio-group5">Enter Your Work details</label>

                                        <div class="form-group mt-4">
                                            <label>Company Type</label>
                                            <select id="inputState2" class="form-select optionbox" name="sector">
                                                <option value="" selected disabled hidden>Select Your Business Sector
                                                </option>
                                                <option value="Private_Sector">Private Sector</option>
                                                <option value="Public_Sector">Public Sector</option>
                                                <option value="Government">Government</option>
                                                <option value="Proprietorship">Proprietorship</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>

                                        <div class="name  mt-2">
                                            <label>Company Name</label>
                                            <input type="text" class="box" placeholder="Enter your Company name"
                                                name="company_name">
                                        </div>
                                        <div class="name  mt-2">
                                            <label>Company Address Pincode</label>
                                            <input type="text" class="box" placeholder="Enter your Company name"
                                                name="company_address">
                                        </div>

                                        <div class="form-group mt-3">
                                            <label>No. Of Years in Current Company</label>
                                            <select id="inputState3" class="form-select optionbox" name="company_exp">
                                                <option value="" selected disabled hidden>Experience</option>
                                                <option value="0-2Years">0-2 Years</option>
                                                <option value="2-5Years">2-5 Years</option>
                                                <option value="5-10Years">5-10 Years</option>
                                                <option value="10+Years">10+ Years</option>
                                            </select>
                                        </div>

                                        <div class="name  mt-2">
                                            <label>Currecnt Designation</label>
                                            <input type="text" class="box" placeholder="Enter your Company name"
                                                name="designation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->
                            <!-- /step-->
                            <div class="step" id="step7">
                                <label id="radio-group6">Enter Your Personal details</label>
                                <div class="form-group">
                                    <div class="space mt-2">
                                        <label>Date Of Birth</label>
                                        <input type="date" id="birthday" name="birthday" class="box">
                                    </div>

                                    <div class="form-group mt-3">
                                        <label>Gender</label>
                                        <select id="inputState4" class="form-select optionbox" name="p_gender">
                                            <option value="" selected disabled hidden>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Highest Qualification</label>
                                        <select id="inputState5" class="form-select optionbox" name="qualification">
                                            <option value="" selected disabled hidden>Select Your Qualification</option>
                                            <option value="UnderGraduate">UnderGraduate</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="PostGraduate">Post Graduate</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="pancard">
                                        <label>Pan Card Number</label>
                                        <input type="text" class="box" placeholder="Enter PANCARD number"
                                            name="pancard">
                                    </div>
                                    <div class="form-group d-flex justify-content-sm-between mt-3 ">
                                        <div class="FirstName col-sm-5">
                                            <label>First Name</label>
                                            <input type="text" class="box" placeholder="First" name="firstname">
                                        </div>
                                        <div class="LastName col-sm-5">
                                            <label>LastName</label>
                                            <input type="text" class="box" placeholder="Last" name="lastname">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="step" id="step8">

                                <div class="form-group">
                                    <div class="form-group mt-3">
                                        <label>Resident Type</label>
                                        <select id="inputState6" class="form-select optionbox" name="residentType">
                                            <option value="" selected disabled hidden>Select Your ResidentType</option>
                                            <option value="Self_owned">Self owned</option>
                                            <option value="Owned_By_Parents">Owned By Parents</option>
                                            <option value="Owned_By_Siblings">Owned By Siblings</option>
                                            <option value="Rented">Rented</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>No. of Years Living in Current Address</label>
                                        <select id="inputState7" class="form-select optionbox"
                                            name="current_address_years">
                                            <option value="" selected disabled hidden>No of Years in Current Address
                                            </option>
                                            <option value="3-6Months">3-6 Months</option>
                                            <option value="6Months-1Year">6 Months- 1 Year</option>
                                            <option value="1-2Years">1-2 Years</option>
                                            <option value="2+years">2+ years</option>
                                        </select>
                                    </div>
                                    <div class="form-group  mt-3">
                                        <label>Current Address Pincode</label>
                                        <input type="text" class="box" placeholder="Enter your Pincode" name="pincode">
                                    </div>

                                </div>

                            </div>
                            <!-- /step-->
                            <div class="step" id="step9">

                                <div class="form-group">
                                    <div class="income">
                                        <label>Monthly Income</label>
                                        <input type="number" class="box" placeholder="Income" name="income">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Select Your Bank</label>
                                        <select id="inputState8" class="form-select optionbox" name="bank">
                                            <option value="" selected disabled hidden>Select Your Bank</option>
                                            <option value="State_Bank_Of_India">State Bank Of India</option>
                                            <option value="HDFC_Bank">HDFC Bank</option>
                                            <option value="Kotak_Bank">Kotak Bank</option>
                                            <option value="Canara_Bank">Canara Bank</option>
                                            <option value="Union_Bank-of_India">Union Bank of India</option>
                                            <option value="Allahabad_Bank">Allahabad Bank</option>
                                            <option value="Andhra_Bank">Andhra Bank</option>
                                            <option value="Axis_Bank">Axis Bank</option>
                                            <option value="Bank_of_Baroda-Corporate_Banking">Bank of Baroda-Corporate
                                                Banking</option>
                                            <option value="Bank_of_Baroda-Retail_Banking">Bank of Baroda- Retail Banking
                                            </option>
                                            <option value="Bank_of_India">Bank of India</option>
                                            <option value="Bank_of_Maharashtra">Bank of Maharashtra</option>
                                            <option value="Central_Bank_of_India">Central Bank of India</option>
                                            <option value="City_Union_Bank">City Union Bank</option>
                                            <option value="Corporation_Bank">Corporation Bank</option>
                                            <option value="Deutsche_Bank">Deutsche Bank</option>
                                            <option value="Development_Credit Bank">Development Credit Bank</option>
                                            <option value="Dhanlaxmi_Bank">Dhanlaxmi Bank</option>
                                            <option value="Federal_Bank">Federal Bank</option>
                                            <option value="ICICI_Bank">ICICI Bank</option>
                                            <option value="IDBI_Bank">IDBI Bank</option>
                                            <option value="Indian_Bank">Indian Bank</option>
                                            <option value="Indian_Overseas Bank">Indian Overseas Bank</option>
                                            <option value="Induslnd_Bank">Induslnd Bank</option>
                                            <option value="ING_Vysya_Bank">ING Vysya Bank</option>
                                            <option value="Jammu_And_Kashmir Bank">Jammu And Kashmir Bank</option>
                                            <option value="Karnataka_Bank">Karnataka Bank</option>
                                            <option value="Karur_Vysya_Bank">Karur Vysya Bank</option>
                                            <option value="Laxmi_Vilas_Bank">Laxmi Vilas Bank</option>
                                            <option value="Oriental_Bank_Of_Commerce">Oriental Bank Of Commerce</option>
                                            <option value="Punjab_National_Bank-Corporate_Banking">Punjab National
                                                Bank-Corporate Banking</option>
                                            <option value="Punjab_National_Bank-Retail_Banking">Punjab National
                                                Bank-Retail Banking</option>
                                            <option value="Punjab&Sind_Bank">Punjab & Sind Bank</option>
                                            <option value="Shamrao_Vitthal_Co-operative_Bank">Shamrao Vitthal
                                                Co-operative Bank</option>
                                            <option value="South_Indian-Bank">South Indian Bank</option>
                                            <option value="State_Bank_of_Bikaner_&_Jaipur">State Bank of Bikaner &
                                                Jaipur</option>
                                            <option value="State_Bank_Of_Hydrabad">State Bank Of Hydrabad</option>
                                            <option value="State_bank_of_Mysore">State bank of Mysore</option>
                                            <option value="State_Bank_of_Patiala">State Bank of Patiala</option>
                                            <option value="State_Bank_of_Travancore">State Bank of Travancore</option>
                                            <option value="Syndicate_Bank">Syndicate Bank</option>
                                            <option value="Tamilnad_Mercantile Bank Ltd">Tamilnad Mercantile Bank Ltd
                                            </option>
                                            <option value="UCO_Bank">UCO Bank</option>
                                            <option value="United_Bank_of_India">United Bank of India</option>
                                            <option value="Vijaya_Bank">Vijaya Bank</option>
                                            <option value="Yes_Bank_Ltd">Yes Bank Ltd</option>
                                            <option value="Others">Others</option>
                                        </select>

                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Are You Intrested in Credit Cared</label>
                                        <select id="inputState9" class="form-select optionbox" name="valid_check">
                                            <option selected value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="conditions">
                                            <p><input type="checkbox" checked>&nbsp;&nbsp;By Submitting this form I
                                                agree <span class="com"><a style="text-decoration: underline;"
                                                        href="<?php echo base_url(); ?>terms">T&C</a></span>
                                                ,<span class="com"><a style="text-decoration: underline;"
                                                        href="<?php echo base_url(); ?>privacy">Privacy
                                                        Policy.</a></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and
                                                I receiving SMS & WhatsApp communication.<span
                                                    style="color: red;">*</span></p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="step" id="step10">
                                <div class="form-group">
                                    <div class="form-group mt-3">
                                        <label>Select your Bank</label>
                                        <select id="inputState10" class="form-select optionbox" name="b_name">
                                            <option value="" selected disabled hidden>Select Your Bank</option>
                                            <option value="State_Bank_Of_India">State Bank Of India</option>
                                            <option value="HDFC_Bank">HDFC Bank</option>
                                            <option value="Kotak_Bank">Kotak Bank</option>
                                            <option value="Canara_Bank">Canara Bank</option>
                                            <option value="Union_Bank-of_India">Union Bank of India</option>
                                            <option value="Allahabad_Bank">Allahabad Bank</option>
                                            <option value="Andhra_Bank">Andhra Bank</option>
                                            <option value="Axis_Bank">Axis Bank</option>
                                            <option value="Bank_of_Baroda-Corporate_Banking">Bank of Baroda-Corporate
                                                Banking</option>
                                            <option value="Bank_of_Baroda-Retail_Banking">Bank of Baroda- Retail Banking
                                            </option>
                                            <option value="Bank_of_India">Bank of India</option>
                                            <option value="Bank_of_Maharashtra">Bank of Maharashtra</option>
                                            <option value="Central_Bank_of_India">Central Bank of India</option>
                                            <option value="City_Union_Bank">City Union Bank</option>
                                            <option value="Corporation_Bank">Corporation Bank</option>
                                            <option value="Deutsche_Bank">Deutsche Bank</option>
                                            <option value="Development_Credit Bank">Development Credit Bank</option>
                                            <option value="Dhanlaxmi_Bank">Dhanlaxmi Bank</option>
                                            <option value="Federal_Bank">Federal Bank</option>
                                            <option value="ICICI_Bank">ICICI Bank</option>
                                            <option value="IDBI_Bank">IDBI Bank</option>
                                            <option value="Indian_Bank">Indian Bank</option>
                                            <option value="Indian_Overseas Bank">Indian Overseas Bank</option>
                                            <option value="Induslnd_Bank">Induslnd Bank</option>
                                            <option value="ING_Vysya_Bank">ING Vysya Bank</option>
                                            <option value="Jammu_And_Kashmir Bank">Jammu And Kashmir Bank</option>
                                            <option value="Karnataka_Bank">Karnataka Bank</option>
                                            <option value="Karur_Vysya_Bank">Karur Vysya Bank</option>
                                            <option value="Laxmi_Vilas_Bank">Laxmi Vilas Bank</option>
                                            <option value="Oriental_Bank_Of_Commerce">Oriental Bank Of Commerce</option>
                                            <option value="Punjab_National_Bank-Corporate_Banking">Punjab National
                                                Bank-Corporate Banking</option>
                                            <option value="Punjab_National_Bank-Retail_Banking">Punjab National
                                                Bank-Retail Banking</option>
                                            <option value="Punjab&Sind_Bank">Punjab & Sind Bank</option>
                                            <option value="Shamrao_Vitthal_Co-operative_Bank">Shamrao Vitthal
                                                Co-operative Bank</option>
                                            <option value="South_Indian-Bank">South Indian Bank</option>
                                            <option value="State_Bank_of_Bikaner_&_Jaipur">State Bank of Bikaner &
                                                Jaipur</option>
                                            <option value="State_Bank_Of_Hydrabad">State Bank Of Hydrabad</option>
                                            <option value="State_bank_of_Mysore">State bank of Mysore</option>
                                            <option value="State_Bank_of_Patiala">State Bank of Patiala</option>
                                            <option value="State_Bank_of_Travancore">State Bank of Travancore</option>
                                            <option value="Syndicate_Bank">Syndicate Bank</option>
                                            <option value="Tamilnad_Mercantile Bank Ltd">Tamilnad Mercantile Bank Ltd
                                            </option>
                                            <option value="UCO_Bank">UCO Bank</option>
                                            <option value="United_Bank_of_India">United Bank of India</option>
                                            <option value="Vijaya_Bank">Vijaya Bank</option>
                                            <option value="Yes_Bank_Ltd">Yes Bank Ltd</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Are You Intrested in Credit Cared</label>
                                        <select id="inputState11" class="form-select optionbox" name="valid_check2">
                                            <option value="Yes" selected>Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="conditions">
                                            <p><input type="checkbox" checked>&nbsp;&nbsp;By Submitting this form I
                                                agree <span class="com"><a style="text-decoration: underline;"
                                                        href="<?php echo base_url(); ?>terms">T&C</a></span>
                                                ,<span class="com"><a style="text-decoration: underline;"
                                                        href="<?php echo base_url(); ?>privacy">Privacy
                                                        Policy.</a></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and
                                                I receiving SMS & WhatsApp communication.<span
                                                    style="color: red;">*</span></p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="step" id="step11">

                                <div class="form-group">
                                    <label id="radio-group7">Income & Bank Details</label>
                                    <div class="form-group">
                                        <div class="form-group mt-3">
                                            <label>Enter Gross Turnover</label>
                                            <select id="inputState10" class="form-select optionbox" name="gross">
                                                <option value="" selected disabled hidden>Select an option</option>
                                                <option value="0-10lacs">0-10 lakhs</option>
                                                <option value="10-20lacs">10-20 lakhs</option>
                                                <option value="20-50lacs">20-50 lakhs</option>
                                                <option value="50+lacs">50+ lakhs</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Select your Bank</label>
                                            <select id="inputState10" class="form-select optionbox" name="b_name1">
                                                <option value="" selected disabled hidden>Select Your Bank</option>
                                                <option value="State_Bank_Of_India">State Bank Of India</option>
                                                <option value="HDFC_Bank">HDFC Bank</option>
                                                <option value="Kotak_Bank">Kotak Bank</option>
                                                <option value="Canara_Bank">Canara Bank</option>
                                                <option value="Union_Bank-of_India">Union Bank of India</option>
                                                <option value="Allahabad_Bank">Allahabad Bank</option>
                                                <option value="Andhra_Bank">Andhra Bank</option>
                                                <option value="Axis_Bank">Axis Bank</option>
                                                <option value="Bank_of_Baroda-Corporate_Banking">Bank of
                                                    Baroda-Corporate Banking</option>
                                                <option value="Bank_of_Baroda-Retail_Banking">Bank of Baroda- Retail
                                                    Banking</option>
                                                <option value="Bank_of_India">Bank of India</option>
                                                <option value="Bank_of_Maharashtra">Bank of Maharashtra</option>
                                                <option value="Central_Bank_of_India">Central Bank of India</option>
                                                <option value="City_Union_Bank">City Union Bank</option>
                                                <option value="Corporation_Bank">Corporation Bank</option>
                                                <option value="Deutsche_Bank">Deutsche Bank</option>
                                                <option value="Development_Credit Bank">Development Credit Bank</option>
                                                <option value="Dhanlaxmi_Bank">Dhanlaxmi Bank</option>
                                                <option value="Federal_Bank">Federal Bank</option>
                                                <option value="ICICI_Bank">ICICI Bank</option>
                                                <option value="IDBI_Bank">IDBI Bank</option>
                                                <option value="Indian_Bank">Indian Bank</option>
                                                <option value="Indian_Overseas Bank">Indian Overseas Bank</option>
                                                <option value="Induslnd_Bank">Induslnd Bank</option>
                                                <option value="ING_Vysya_Bank">ING Vysya Bank</option>
                                                <option value="Jammu_And_Kashmir Bank">Jammu And Kashmir Bank</option>
                                                <option value="Karnataka_Bank">Karnataka Bank</option>
                                                <option value="Karur_Vysya_Bank">Karur Vysya Bank</option>
                                                <option value="Laxmi_Vilas_Bank">Laxmi Vilas Bank</option>
                                                <option value="Oriental_Bank_Of_Commerce">Oriental Bank Of Commerce
                                                </option>
                                                <option value="Punjab_National_Bank-Corporate_Banking">Punjab National
                                                    Bank-Corporate Banking</option>
                                                <option value="Punjab_National_Bank-Retail_Banking">Punjab National
                                                    Bank-Retail Banking</option>
                                                <option value="Punjab&Sind_Bank">Punjab & Sind Bank</option>
                                                <option value="Shamrao_Vitthal_Co-operative_Bank">Shamrao Vitthal
                                                    Co-operative Bank</option>
                                                <option value="South_Indian-Bank">South Indian Bank</option>
                                                <option value="State_Bank_of_Bikaner_&_Jaipur">State Bank of Bikaner &
                                                    Jaipur</option>
                                                <option value="State_Bank_Of_Hydrabad">State Bank Of Hydrabad</option>
                                                <option value="State_bank_of_Mysore">State bank of Mysore</option>
                                                <option value="State_Bank_of_Patiala">State Bank of Patiala</option>
                                                <option value="State_Bank_of_Travancore">State Bank of Travancore
                                                </option>
                                                <option value="Syndicate_Bank">Syndicate Bank</option>
                                                <option value="Tamilnad_Mercantile Bank Ltd">Tamilnad Mercantile Bank
                                                    Ltd</option>
                                                <option value="UCO_Bank">UCO Bank</option>
                                                <option value="United_Bank_of_India">United Bank of India</option>
                                                <option value="Vijaya_Bank">Vijaya Bank</option>
                                                <option value="Yes_Bank_Ltd">Yes Bank Ltd</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Are You Intrested in Credit Cared</label>
                                            <select id="inputState11" class="form-select optionbox" name="valid_check3">
                                                <option selected value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <div class="conditions">
                                                <p><input type="checkbox" checked>&nbsp;&nbsp;By Submitting this form I
                                                    agree <span class="com"><a style="text-decoration: underline;"
                                                            href="<?php echo base_url(); ?>terms">T&C</a></span>
                                                    ,<span class="com"><a style="text-decoration: underline;"
                                                            href="<?php echo base_url(); ?>privacy">Privacy
                                                            Policy.</a></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and
                                                    I receiving SMS & WhatsApp communication.<span
                                                        style="color: red;">*</span></p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="step" id="step12">

                                <div class="form-group mt-3">
                                    <label>Highest Qualification</label>
                                    <select id="inputState5" class="form-select optionbox" name="qualification1">
                                        <option value="" selected disabled hidden>Select Your Qualification</option>
                                        <option value="UnderGraduate">UnderGraduate</option>
                                        <option value="Graduate">Graduate</option>
                                        <option value="PostGraduate">Post Graduate</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="institution mt-2">
                                    <label>Institution Name</label>
                                    <input type="text" class="box" placeholder="Enter Your Institution Name"
                                        name="Institution">
                                </div>

                            </div>
                            <div class="step" id="step13">
                                <div class="form-group">
                                    <div class="">
                                        <div class="d-flex justify-content-between">
                                            <label id="radio-group8">Do You Have Any Business Proof?</label>
                                            <div class="err"></div>
                                        </div>
                                        <div class="optionbox  mt-4"><label for="chequee" style="text-wrap: nowrap;">
                                                <input type="radio" id="option14" name="options4" value="Yes">Yes
                                            </label></div>
                                        <div class="optionbox mt-3"><label for="cash" style="text-wrap: nowrap;">
                                                <input type="radio" id="option15" name="options4" value="No">
                                                No</div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="step" id="step14">
                                <div class="form-group">
                                    <div class="">
                                        <label id="radio-group9">Enter Your Business details</label>

                                        <div class="form-group mt-4">
                                            <label>Company Type</label>
                                            <select id="inputState12" class="form-select optionbox" name="sector2">
                                                <option value="" selected disabled hidden>Select Company Type</option>
                                                <option value="Private_Sector">Private Sector</option>
                                                <option value="Public_Sector">Public Sector</option>
                                                <option value="Government">Government</option>
                                                <option value="Proprietorship">Proprietorship</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>

                                        <div class="name  mt-2">
                                            <label>Company Name</label>
                                            <input type="text" class="box" placeholder="Enter your Company name"
                                                name="b_company_name">
                                        </div>
                                        <div class="name  mt-2">
                                            <label>Current Address Pincode</label>
                                            <input type="text" class="box" placeholder="Enter your Company name"
                                                name="b_address_pincode">
                                        </div>

                                        <div class="form-group mt-3">
                                            <label>No. Of Years in Business</label>
                                            <select id="inputState13" class="form-select optionbox" name="b_years">
                                                <option value="" selected disabled hidden>Select Business Years</option>
                                                <option value="3-6Months">3-6 Months</option>
                                                <option value="6Months-1Year">6 Months- 1 Year</option>
                                                <option value="1-2Years">1-2 Years</option>
                                                <option value="2+years">2+ years</option>
                                            </select>
                                        </div>

                                        <div class="name  mt-2">
                                            <label>Nature Of Business</label>
                                            <select id="inputState14" class="form-select optionbox"
                                                name="business_nature">
                                                <option value="" selected disabled hidden>Select Nature Of Business
                                                </option>
                                                <option value="Service_Provider">Service Provider</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Product_Based">Product Based</option>
                                                <option value="Sales">Sales</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
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
                <div class="form-footer d-flex">
                    <!--<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>-->
                    <input type="hidden" name="tokenValue" type="hidden" id="currentTokenValue">
                    <input type="hidden" name="utm_source" id="utm_source" value="<?php echo @$_GET['utm_source']; ?>">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo @$_GET['utm_medium']; ?>">
                    <input type="hidden" name="utm_publisher_id" id="utm_publisher_id"
                        value="<?php echo @$_GET['utm_publisher_id']; ?>">
                    <input type="hidden" name="utm_subid_1" id="utm_subid_1"
                        value="<?php echo @$_GET['utm_subid_1']; ?>">
                    <input type="hidden" name="utm_subid_2" id="utm_subid_2"
                        value="<?php echo @$_GET['utm_subid_2']; ?>">
                    <input type="hidden" name="default" id="default" value="<?php echo @$_GET['d']; ?>">
                    <?php if (isset($_GET['m'])): ?>
                        <input type="hidden" name="mobile" id="mobile" value="<?php echo @$_GET['m']; ?>">
                    <?php endif; ?>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("wrapped");
            const steps = Array.from(form.querySelectorAll(".step")); // Ensure steps is converted to an array

            let currentStep = 0;
            const prev_back = []; // Initialize array to store previous steps

            // Function to show current step and manage button visibility
            const showStep = (stepId) => {
                steps.forEach(step => {
                    step.style.display = step.id === stepId ? "block" : "none";
                });

                const prevButton = form.querySelector(".backward");
                const nextButton = form.querySelector(".forward");
                const submitButton = form.querySelector(".submit");

                if (stepId === 'step0') {
                    prevButton.style.display = "none";
                } else {
                    prevButton.style.display = "inline-block";
                }

                if (stepId === 'step10' || stepId === 'step11') {
                    nextButton.style.display = "none";
                    submitButton.style.display = "inline-block";
                } else {
                    nextButton.style.display = "inline-block";
                    submitButton.style.display = "none";
                }
            };

            // Validation function for each step
            const validateStep = (stepId) => {
                const step = form.querySelector(`#${stepId}`);
                console.log(step);
                const inputs = step.querySelectorAll('input, select');
                let isValid = true;

                inputs.forEach(input => {
                    if (input.hasAttribute('name')) {
                        if (input.type === 'radio') {
                            const radioGroup = step.querySelectorAll(`input[name="${input.name}"]`);
                            const err = step.querySelector('.err');
                            const checked = Array.from(radioGroup).some(radio => radio.checked);
                            if (!checked) {
                                err.innerHTML = "* Please select an option";
                                err.style.color = "red";
                                isValid = false;
                            } else {
                                err.innerHTML = "";
                            }
                        } else if (input.tagName === 'SELECT') {
                            if (input.value.trim() === '') {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else {
                                input.style.borderColor = "";
                            }
                        } else if (input.value.trim() === '') {
                            input.style.borderColor = "red";
                            isValid = false;
                        } else {
                            input.style.borderColor = "";
                        }
                    }

                    switch (input.getAttribute('name')) {
                        case 'mobile':
                            if (!/^[6789]\d{9}$/.test(input.value)) {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else {
                                input.style.borderColor = "";
                                input.setAttribute('readonly', 'readonly'); // Set readonly attribute
                                document.getElementById('otp-div').style.display = 'block';
                            }
                            break;
                        case 'email':
                            if (!/\S+@\S+\.\S+/.test(input.value)) {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else {
                                input.style.borderColor = "";
                            }
                            break;
                        case 'pancard':
                            if (!/[A-Z]{5}\d{4}[A-Z]{1}/.test(input.value)) {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else if (input.value.length > 10) {
                                // PAN card length exceeds maximum limit of 10 characters
                                input.style.borderColor = "red"; // Highlight input in red
                                isValid = false; // Set validation flag to false
                            } else {
                                input.style.borderColor = "";
                            }
                            break;
                        case 'birthday':
                            const birthday = new Date(input.value);
                            const minDate = new Date();
                            minDate.setFullYear(minDate.getFullYear() - 18);
                            if (!(birthday instanceof Date && !isNaN(birthday) && birthday <= minDate)) {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else {
                                input.style.borderColor = "";
                            }
                            break;
                        case 'company_address':
                        case 'b_address_pincode':
                        case 'pincode':
                            if (!/^\d{6}$/.test(input.value)) {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else {
                                input.style.borderColor = "";
                            }
                            break;
                        case 'Name':
                            if (/[0-9]/.test(input.value)) {
                                input.style.borderColor = "red";
                                isValid = false;
                            } else {
                                input.style.borderColor = "";
                            }
                            break;
                    }
                });

                return isValid;
            };


            const navigateStep1 = (currentStepId, direction) => {
                switch (currentStepId) {
                    case 'step0':
                        if (validateStep(currentStepId)) {
                            // Capture values from step0
                            const mobile = form.querySelector('#num').value;
                            const loan = form.querySelector('input[name="loan"]').value;
                            const email = form.querySelector('input[name="email"]').value;

                            // Set values in step1
                            form.querySelector('#num_step0').value = mobile;
                            form.querySelector('input[name="loan_1"]').value = loan;
                            form.querySelector('input[name="email_1"]').value = email;

                            // Navigate to step1
                            showStep('step1');
                            currentStep = 1; // Update to the appropriate step index
                            prev_back.push('step0');
                        }
                        break;
                    // case 'step1':
                    //     if (validateStep(currentStepId)) {
                    //         showStep('step2');
                    //         currentStep = 2; // Update to the appropriate step index
                    //         prev_back.push('step1');
                    //     }
                    //     break;
                    case 'step2':
                        const loanType = form.querySelector('input[name="options"]:checked').value;
                        if (loanType === 'Personal_Loan') {
                            showStep('step3');
                            currentStep = 3;
                            prev_back.push('step2');
                        } else if (loanType === 'Business_Loan') {
                            showStep('step13');
                            currentStep = 13;
                            prev_back.push('step2');
                        }
                        break;
                    case 'step3':
                        const employmentType = form.querySelector('input[name="employee_type"]:checked').value;
                        if (employmentType === 'SALARIED') {
                            showStep('step4');
                            currentStep = 4;
                            prev_back.push('step3');
                        } else if (employmentType === 'SELF-EMPLOYEE') {
                            showStep('step5');
                            currentStep = 5;
                            prev_back.push('step3');
                        } else if (employmentType === 'Student') {
                            showStep('step7');
                            currentStep = 7;
                            prev_back.push('step3');
                        }
                        break;
                    case 'step4':
                        const salaryType = form.querySelector('input[name="options2"]:checked').value;
                        if (salaryType === 'Salary_in_Bank') {
                            showStep('step6');
                            currentStep = 6;
                            prev_back.push('step4');
                        } else if (salaryType === 'Salary_in_Cash') {
                            showStep('step5');
                            currentStep = 5;
                            prev_back.push('step4');
                        }
                        break;
                    case 'step5':
                        const selectElement = form.querySelector('select[name="Profession"]');
                        const professionType = selectElement.value;
                        console.log(professionType);
                        if (professionType !== '') {
                            showStep('step7');
                            currentStep = 7;
                            prev_back.push('step5');
                        }
                        break;
                    case 'step6':
                        if (validateStep(currentStepId)) {
                            showStep('step7');
                            currentStep = 7;
                            prev_back.push('step6');
                        }
                        break;
                    case 'step7':
                        const includesStep7AndStep8 = prev_back.every(step => ['step0', 'step1', 'step2', 'step3', 'step7'].includes(step));
                        if (includesStep7AndStep8) {
                            showStep('step12'); // Navigate to step2 if 'step13' is followed by 'step14'
                            currentStep = 12; // Update to the appropriate step index
                            prev_back.push('step7');

                        } else if (validateStep(currentStepId)) {
                            showStep('step8');
                            currentStep = 8;
                            prev_back.push('step7');
                        }
                        break;
                    case 'step12':
                        const EducationElement = form.querySelector('select[name="qualification"]');
                        const EducationType = EducationElement.value;
                        if (EducationType !== '') {
                            showStep('step8');
                            currentStep = 8;
                            prev_back.push('step12');
                        }
                        break;
                    case 'step13':
                        const BusinessType = form.querySelector('input[name="options4"]:checked').value;
                        if (BusinessType === 'Yes') {
                            showStep('step14');
                            currentStep = 14;
                            prev_back.push('step13');
                        } else {
                            showStep('step5');
                            currentStep = 5;
                            prev_back.push('step13');
                        }
                        break;
                    case 'step14':
                        if (validateStep(currentStepId)) {
                            showStep('step7');
                            currentStep = 7; // Update to the appropriate step index
                            prev_back.push('step14');
                        }
                        break;
                    case 'step8':
                        const includesStep13AndStep5 = prev_back.includes('step13') && prev_back.indexOf('step13') < prev_back.indexOf('step5');
                        const includesStep13AndStep14 = prev_back.includes('step13') && prev_back.indexOf('step13') < prev_back.indexOf('step14');
                        const includesStep8AndStep10 = prev_back.every(step => ['step1', 'step2', 'step3', 'step7', 'step12'].includes(step));

                        if (includesStep13AndStep5) {
                            showStep('step9'); // Navigate to step2 if 'step13' is followed by 'step14'
                            currentStep = 9; // Update to the appropriate step index
                            prev_back.push('step8');

                            // form.querySelector(".forward").style.display = "none";
                            // form.querySelector(".submit").style.display = "inline-block";

                        } else if (includesStep13AndStep14) {
                            // Handle other cases or defaults as needed
                            // For example, navigate based on residentType
                            showStep('step11');
                            currentStep = 11; // Update to the appropriate step index
                            prev_back.push('step8');
                            // form.querySelector(".forward").style.display = "none";
                            // form.querySelector(".submit").style.display = "inline-block";
                        } else if (includesStep8AndStep10) {
                            showStep('step10');
                            currentStep = 10; // Update to the appropriate step index
                            prev_back.push('step8');
                        } else {
                            showStep('step9'); // Navigate to step2 if 'step13' is followed by 'step14'
                            currentStep = 9; // Update to the appropriate step index
                            prev_back.push('step8');
                        }
                        break;

                    default:
                        // const stepsArray = Array.from(steps);
                        // const currentIndex = stepsArray.findIndex(step => step.id === currentStepId);
                        // const nextIndex = direction === 'next' ? currentIndex + 1 : currentIndex - 1;
                        // showStep(stepsArray[nextIndex].id);
                        // currentStep = nextIndex >= 0 && nextIndex < stepsArray.length ? nextIndex : currentStep;
                        break;
                }

                // Check if we need to display the submit button
                const currentStepIdAfterNavigation = steps[currentStep].id;
                switch (currentStepIdAfterNavigation) {
                    case 'step9': // Show submit button after step15 for option14
                        form.querySelector(".forward").style.display = "none";
                        form.querySelector(".submit").style.display = "inline-block";
                        break;
                    case 'step10': // Show submit button after step10 for option15
                        form.querySelector(".forward").style.display = "none";
                        form.querySelector(".submit").style.display = "inline-block";
                        break;
                    case 'step11': // Show submit button after step10 for option15
                        form.querySelector(".forward").style.display = "none";
                        form.querySelector(".submit").style.display = "inline-block";
                        break;
                    default:
                        form.querySelector(".forward").style.display = "inline-block";
                        form.querySelector(".submit").style.display = "none";
                        break;
                }
            };





            // Function to navigate to the next or previous step
            const navigateSte = (direction) => {
                const currentStepId = steps[currentStep].id;
                console.log('Navigating', direction, 'from', currentStepId);
                console.log(currentStepId)

                if (direction === 'next' && validateStep(currentStepId)) {
                    navigateStep1(currentStepId, direction);
                    console.log(prev_back);
                } else if (direction === 'prev' && prev_back.length > 0) {

                    // Pop the last step from history
                    console.log(prev_back);
                    const back2 = prev_back.pop();
                    console.log('Navigating to previous step:', back2);
                    console.log(prev_back);

                    // Show the previous step
                    showStep(back2);



                    // Update currentStep index or identifier
                    currentStep = steps.findIndex(step => step.id === back2); // Update currentStep correctly
                }


            };


            // Event listener for forward button (next step)
            form.querySelector(".forward").addEventListener('click', function () {
                if (currentStep == 0) {
                    saveBasicInfo(currentStep);
                } else if (currentStep == 1) {
                    verifyOtp(currentStep);
                   
                } else {
                    saveData(currentStep);
                }

                navigateSte('next');
            });
            function saveBasicInfo(step) {
                var formData = $('#wrapped').serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("camp/process_step"); ?>',
                    data: formData,
                    success: function (response) {
                        // response = JSON.parse(response);
                        // // alert(response.status);
                        // console.log('Step ' + step + ' data sent successfully.');
                        // // Optionally handle response
                        // if(response.status = 'OTP_FAIL'){
                        //     showStep('step1');
                        //     return false;
                        // }
                        var result = JSON.parse(response);
                        if (result.status === 'success') {
                            console.log('success');
                            
                            // Optionally, proceed to the next step or show a success message to the user
                            // For example: $('#otpMessage').text('OTP verified. Proceeding to next step.');
                        } else {
                            console.error(result.message);
                            // Optionally, show an error message to the user
                            // For example: $('#otpMessage').text('Error: ' + result.message);
                        }


                    },
                    error: function (xhr, status, error) {
                        console.error('Error sending data for step ' + step + ': ' + error);
                        // Optionally handle error
                    }
                });
            }

            function saveData(step) {
                var formData = $('#wrapped').serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("camp/save_data"); ?>',
                    data: formData,
                    // success: function (response) {
                    //     response = JSON.parse(response);
                    //     alert(response.status);
                    //     console.log('Step ' + step + ' data sent successfully.');
                    //     // Optionally handle response
                    //     if (response.status = 'OTP_FAIL') {
                    //         showStep('step1');
                    //         return false;
                    //     }


                    // },
                    error: function (xhr, status, error) {
                        console.error('Error sending data for step ' + step + ': ' + error);
                        // Optionally handle error
                    }
                });
            }   


            function verifyOtp(step) {
                var formData = $('#wrapped').serialize();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("camp/otp_verification"); ?>',
                    data: formData,
                    success: function (response) {
                        response = JSON.parse(response);

                        console.log('Step ' + step + ' data sent successfully.');
                        // Optionally handle response
                        if (response.status == 'OTP_FAIL') {
                            showStep('step1');
                            currentStep = 1;
                            document.getElementById('otp').style.borderColor = 'red';
                            return false;
                        } else if (response.status == 'OTP_VERIFIED') {
                            // alert(response.status);
                            // showStep('step2');
                            showStep('step2');
                            currentStep = 2;
                            prev_back.push('step1');
                            return true;
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error verifying OTP: ' + error);
                        // Optionally, show a generic error message to the user
                        // For example: $('#otpMessage').text('Failed to verify OTP. Please try again later.');
                    }
                });
            }



            // Event listener for backward button (previous step)
            form.querySelector(".backward").addEventListener('click', function () {
                navigateSte('prev');
            });


            // Form submission listener
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                // Serialize form data (optional, if you want to send data via AJAX)
                const formData = new FormData(form);
                const serializedData = {};
                formData.forEach((value, key) => {
                    serializedData[key] = value;
                });
                console.log(serializedData); // Example: send data via AJAX or process further

                // Determine current step based on prev_back
                let currentStepId;
                if (prev_back.includes('step13') && prev_back.indexOf('step13') < prev_back.indexOf('step14')) {
                    currentStepId = 'step11';
                    saveData(currentStep);
                } else if (prev_back[2] === 'step3' && prev_back[3] === 'step7' && prev_back[4] === 'step12' && prev_back[5] === 'step8') {
                    currentStepId = 'step10';
                    saveData(currentStep);
                } else {
                    currentStepId = 'step9';
                    saveData(currentStep);
                }

                // Validate based on current step
                if (validateStep(currentStepId)) {
                    //alert("Form submitted successfully");

                    //form.submit(); // Submit the form


                    $('#overlay').fadeIn();
                    var form = $('#wrapped')[0];
                    var data = new FormData(form);
                    //				alert();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url("camp/create_multi_offer"); ?>',
                        data: data,
                        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                        processData: false, // NEEDED, DON'T OMIT THIS
                        success: function (data) {
                       
                            var result = JSON.parse(data);
                         
                            if (result.status == 'success') {
                                window.location.replace(result.redirect_url);
                                // $('.loading').hide();T
                                $('#overlay').fadeOut();
                                // $.confirm({ 
                                // title: 'Congratulations!',
                                // content: 'We have something for You!',
                                // buttons: {
                                // somethingElse: {
                                // text: 'Okay',
                                // btnClass: 'btn-blue',
                                // keys: ['enter', 'shift'],
                                // action: function(){
                                // window.location.replace("<?php echo base_url('offers/page?offer_id='); ?>"+ result.offer_id + "&lead_id=" + result.lead_id);
                                // }
                                // }
                                // }
                                // });
                            } else if (result.status == 'error') {
                                $.confirm({
                                    title: 'Sorry!',
                                    content: 'Some Error Occurred, Please Try Again!',
                                    buttons: {
                                        somethingElse: {
                                            text: 'Okay',
                                            btnClass: 'btn-blue',
                                            keys: ['enter', 'shift'],
                                            action: function () {
                                                window.location.replace("<?php echo base_url('offers/page_one'); ?>");
                                            }
                                        }
                                    }
                                });
                            } else {
                                // var result = JSON.parse(response);
                                // console.log("Result status:", result.status);
                                console.log("wq");
                                // console.log(data);
                            }
                        }
                    });
                } else {
                    // If validation fails
                    alert('Please enter all the fileds');
                }


            });


            // Show the initial step
            showStep(steps[currentStep].id);

        });
        function resend() {
            var formData = $('#wrapped').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("camp/process_step"); ?>',
                data: formData,

            });
        }

    </script>


    <!-- Jquery JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/common_scripts.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/js/velocity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
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
    <!--========  PUSH WEB NOTIFICATION CODE STARTs here  =============-->
    <div id="tockeInfoDisplay" style="font-size:8px; width:0;height:0;overflow:hidden;">
        <div id="token"></div>
        <div id="msg"></div>
        <div id="notis"></div>
        <div id="err"></div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script>
        MsgElem = document.getElementById("msg");
        TokenElem = document.getElementById("token");
        NotisElem = document.getElementById("notis");
        ErrElem = document.getElementById("err");
        // Initialize Firebase
        // TODO: Replace with your project's customized code snippet

        const config = {
            apiKey: "AIzaSyCFXaUt4lPVRDyyGJjQ44NKqlg_muVOvuI",
            authDomain: "lowcredit-d11c0.firebaseapp.com",
            projectId: "lowcredit-d11c0",
            storageBucket: "lowcredit-d11c0.appspot.com",
            messagingSenderId: "57374267918",
            appId: "1:57374267918:web:fbb41e8da068bcf7487a5f",
            measurementId: "G-2KL03B1H5W"
        };

        firebase.initializeApp(config);
        const messaging = firebase.messaging();
        messaging
            .requestPermission()
            .then(function () {
                MsgElem.innerHTML = "Notification permission granted."
                console.log("Notification permission granted.");
                messaging.getToken().then(function (currentToken) {
                    if (currentToken) {
                        $('#currentTokenValue').val(currentToken);
                        insertToken(currentToken);
                    }
                });
                return messaging.getToken()
            })
            .then(function (token) {
                TokenElem.innerHTML = "token is : " + token
                // Here need to insert token in db
                //insertToken(token);
            })
            .catch(function (err) {
                ErrElem.innerHTML = ErrElem.innerHTML + "; " + err
                console.log("Unable to get permission to notify.", err);
            });

        messaging.onMessage(function (payload) {
            console.log("Message received. ", payload);
            NotisElem.innerHTML = NotisElem.innerHTML + JSON.stringify(payload);

            const { title, options } = payload.data;
            const imageUrl = payload.data.image;
            const iconUrl = payload.data.icon;
            const clickAction = payload.data.click_action;

            // Check if the browser supports notifications
            if ('Notification' in window) {
                // Request notification permission
                Notification.requestPermission().then(function (permission) {
                    if (permission === 'granted') {
                        console.log('Notification permission granted.');

                        // Use the Service Worker for notifications
                        navigator.serviceWorker.ready.then(function (registration) {
                            console.log('Service Worker ready for notifications.');

                            // Display the notification
                            registration.showNotification(title, {
                                ...options,
                                body: payload.data.body, // Check if options is defined
                                image: imageUrl,
                                icon: iconUrl,
                                data: {
                                    click_action: clickAction,
                                },
                            });
                        });
                    } else {
                        console.error('Notification permission denied.');
                    }
                });
            } else {
                console.error('Browser does not support notifications.');
            }
        });

        // self.addEventListener('notificationclick', function (event) {
        //   const clickAction = event.notification.data.click_action;
        //   alert('Notification Clicked. Click Action:', clickAction);

        //   event.notification.close();

        //   if (clickAction) {
        //     event.waitUntil(
        //       clients.matchAll({ type: 'window' }).then(clientsArr => {
        //         // Check if any client window is already open
        //         const isOpen = clientsArr.some(client => client.url === clickAction);

        //         if (isOpen) {
        //           clientsArr.forEach(client => {
        //             if (client.url === clickAction && 'focus' in client) {
        //               return client.focus();
        //             }
        //           });
        //         } else {
        //           return clients.openWindow(clickAction);
        //         }
        //       })
        //     );
        //   }
        // });

        function insertToken(token) {
            console.log(token);
            $.ajax({
                url: '<?= base_url(); ?>fcminsert.php',
                data: "token=" + token,
                type: 'POST',
                success: function (rcvdata) {
                    var result = eval('(' + rcvdata + ')');
                    console.log(result.errorMessage);
                }
            });
        }
    </script>
    <!--========  PUSH WEB NOTIFICATION CODE ENDS here  =============-->

</body>

</html>