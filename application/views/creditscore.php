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
    <title>CredBuddha | Credit Score</title>

    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <style>
        .error {
            color: red;
        }

        .help-block {
            color: red;
            font-size: 12px;
        }
    </style>
    <script>
        function validateForm() {
            // Clear all error messages
            document.getElementById("first_name_error").innerText = "";
            document.getElementById("last_name_error").innerText = "";
            document.getElementById("email_error").innerText = "";
            document.getElementById("pan_no_error").innerText = "";
            document.getElementById("dob_error").innerText = "";
            document.getElementById("gender_error").innerText = "";
            document.getElementById("pincode_error").innerText = "";
            document.getElementById("mobile_no_error").innerText = "";

            // Get all form values
            const firstName = document.getElementById("first_name").value.trim();
            const lastName = document.getElementById("last_name").value.trim();
            const email = document.getElementById("email").value.trim();
            const panNo = document.getElementById("pan_no").value.trim();
            const dob = document.getElementById("dob").value;
            const gender = document.getElementById("gender").value;
            const pincode = document.getElementById("pincode").value.trim();
            const mobileNo = document.getElementById("mobile_no").value.trim();
            const termsChecked = document.getElementById("foo_bar").checked;

            let isValid = true;

            // Name validation (only letters allowed)
            const namePattern = /^[A-Za-z\s]+$/;

            if (!firstName) {
                document.getElementById("first_name_error").innerText = "First Name is required.";
                isValid = false;
            } else if (!namePattern.test(firstName)) {
                document.getElementById("first_name_error").innerText = "First Name can only contain letters.";
                isValid = false;
            }

            if (!lastName) {
                document.getElementById("last_name_error").innerText = "Last Name is required.";
                isValid = false;
            } else if (!namePattern.test(lastName)) {
                document.getElementById("last_name_error").innerText = "Last Name can only contain letters.";
                isValid = false;
            }

            // Email validation
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email) {
                document.getElementById("email_error").innerText = "Email is required.";
                isValid = false;
            } else if (!emailPattern.test(email)) {
                document.getElementById("email_error").innerText = "Invalid email format.";
                isValid = false;
            }

            // PAN Number validation
            const panPattern = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            if (!panNo) {
                document.getElementById("pan_no_error").innerText = "PAN Number is required.";
                isValid = false;
            } else if (!panPattern.test(panNo)) {
                document.getElementById("pan_no_error").innerText = "Invalid PAN Number.";
                isValid = false;
            }

            // Date of Birth validation
            if (!dob) {
                document.getElementById("dob_error").innerText = "Date of Birth is required.";
                isValid = false;
            }

            // Gender validation
            if (!gender) {
                document.getElementById("gender_error").innerText = "Please select your gender.";
                isValid = false;
            }

            // Pincode validation
            const pincodePattern = /^[1-9][0-9]{5}$/;
            if (!pincode) {
                document.getElementById("pincode_error").innerText = "PIN Code is required.";
                isValid = false;
            } else if (!pincodePattern.test(pincode)) {
                document.getElementById("pincode_error").innerText = "Pincode should be of 6 digits.";
                isValid = false;
            }

            // Mobile Number validation
            const mobilePattern = /^[6-9][0-9]{9}$/;
            if (!mobileNo) {
                document.getElementById("mobile_no_error").innerText = "Mobile Number is required.";
                isValid = false;
            } else if (!mobilePattern.test(mobileNo)) {
                document.getElementById("mobile_no_error").innerText = "Mobile number should 10 Digits";
                isValid = false;
            }

            // Terms and Conditions validation
            if (!termsChecked) {
                alert("You must agree to the terms and conditions.");
                isValid = false;
            }

            if (isValid) {
                // Redirect to Google if form is valid
                window.location.href = "https://www.google.com";
            }

            return isValid;
        }
    </script>
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
                                <a href="<?php echo base_url(); ?>creditscore" class="nav-link active">Free Credit score</a>

                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>about" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url(); ?>bloghome" class="nav-link" >Blog</a>

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



    <!-- Contact Section Start -->
    <div class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 contact-img p-0">
                    <img src="<?php echo base_url(); ?>assets/img/formimg.jpg" alt="contact">
                </div>

                <div class="col-lg-6 p-0">
                    <div class="contact-form">
                        <div class="contact-text" style="text-align: center;">
                            <h2>Apply & Get Loan Approved Instantly</h2>
                        </div>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            required placeholder="First Name">
                                        <div class="help-block with-errors" id="first_name_error"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control" required
                                            placeholder="Last Name">
                                        <div class="help-block with-errors" id="last_name_error"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            placeholder="Email">
                                        <div class="help-block with-errors" id="email_error"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" id="pan_no" name="pan_no" class="form-control" required
                                            placeholder="Enter Your PAN Number">
                                        <div class="help-block with-errors" id="pan_no_error"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="date" required="" placeholder="DD-MM-YYYY" name="dob" id="dob"
                                            required class="form-control" autocomplete="off" max="2024-06-18"
                                            style="color: rgb(50, 46, 46); text-align: left;">
                                        <div class="help-block with-errors" id="dob_error"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="gender" id="gender" autocomplete="off"
                                            class="form-control gender-select dropdown" required>
                                            <option value="" disabled="" selected="">Select Your Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                        </select>
                                        <div class="help-block with-errors" id="gender_error"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="tel" id="pincode" name="pincode" class="form-control"
                                            placeholder="Residential PIN Code" required>
                                        <div class="help-block with-errors" id="pincode_error"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="tel" name="mobile_no" id="mobile_no" class="form-control"
                                            placeholder="Enter Your Mobile Number" required>
                                        <div class="help-block with-errors" id="mobile_no_error"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <div class="checkbox_text">
                                                <input type="checkbox" name="foo" value="bar" id="foo_bar"
                                                    data-gtm-form-interact-field-id="0" required checked>
                                                <label class="declaration_para" for="foo_bar">I hereby declare that I
                                                    have read, understood, and agree to the <a href="#" target="_blank"
                                                        style="text-decoration: none;">Terms &amp;
                                                        Conditions</a>
                                                    and the <a href="#" target="_blank"
                                                        style="text-decoration: none;">Privacy
                                                        Policy</a>. I allow Cred Buddha Loans, its
                                                    Lending Partners, and subsidiaries to contact me via Phone/email
                                                    or any other
                                                    mode of communication in loan, credit card, or any other related
                                                    matters/Information/promotion.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="button" class="default-btn contact-btn" onclick="validateForm()">
                                        Check Your Credit Score
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->

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
                            <li><a href="<?php echo base_url(); ?>terms">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting

            // Clear previous errors
            document.querySelectorAll('.error').forEach(e => e.textContent = '');

            // Get form field values
            const firstName = document.getElementById('name').value.trim();
            const lastName = document.getElementById('last_name').value.trim();
            const email = document.getElementById('Email').value.trim();
            const panNo = document.getElementById('pan_no').value.trim();
            const dob = document.getElementById('date').value.trim();
            const gender = document.getElementById('gender').value.trim();
            const pincode = document.getElementById('pincode').value.trim();
            const mobileNo = document.getElementById('mobile_no').value.trim();
            const termsChecked = document.getElementById('foo_bar').checked;

            // Validation flags
            let valid = true;

            // Validation logic
            if (!firstName) {
                setError('name', 'Please enter your First Name');
                valid = false;
            }

            if (!lastName) {
                setError('last_name', 'Please enter your Last Name');
                valid = false;
            }

            if (!email || !validateEmail(email)) {
                setError('Email', 'Please enter a valid email');
                valid = false;
            }

            if (!panNo || !validatePan(panNo)) {
                setError('pan_no', 'Please enter a valid PAN Number');
                valid = false;
            }

            if (!dob) {
                setError('date', 'Please enter your Date of Birth');
                valid = false;
            }

            if (!gender) {
                setError('gender', 'Please select your Gender');
                valid = false;
            }

            if (!pincode || !validatePincode(pincode)) {
                setError('pincode', 'Please enter a valid PIN Code');
                valid = false;
            }

            if (!mobileNo || !validateMobile(mobileNo)) {
                setError('mobile_no', 'Please enter a valid Mobile Number');
                valid = false;
            }

            if (!termsChecked) {
                setError('foo_bar', 'You must agree to the terms and conditions');
                valid = false;
            }

            // If all validations pass, submit the form
            if (valid) {
                document.getElementById('contactForm').submit();
            }
        });

        function setError(id, message) {
            const element = document.getElementById(id);
            const errorElement = element.nextElementSibling;
            errorElement.textContent = message;
            errorElement.classList.add('error');
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function validatePan(pan) {
            const re = /[A-Z]{5}[0-9]{4}[A-Z]{1}/;
            return re.test(pan);
        }

        function validatePincode(pincode) {
            const re = /^[1-9][0-9]{5}$/;
            return re.test(pincode);
        }

        function validateMobile(mobile) {
            const re = /^[6-9]\d{9}$/;
            return re.test(mobile);
        }
    </script>

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