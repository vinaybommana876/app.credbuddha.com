<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="credbuddha website">
    <meta name="keywords" content="credbuddha,loan,banks,nbfcs">
	<title>Personal Loan </title>

	<!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet"> -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/site/images/favicon.webp" />

	<!-- BASE CSS -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper_bundle.min.css" type="text/css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<!-- <link href="css/vendors.css" rel="stylesheet"> -->

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>
	<style>
		  body {
            font-family: "Chivo", sans-serif;
        }
		@media screen and (min-width: 375px) and (max-width: 767px) {
			.head
			{
				display: flex;
				flex-direction: column !important;
				justify-content: center !important;
			}
			
		}
		.head
		{
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}
		.step
		{
			font-size: 20px;
		}
		.btn.btn-gradient-primary {
			background: linear-gradient(to right, #1f61eb 0%, #94b4f5 100%);
			border: none;
			color: #fff;
			box-shadow: 0 5px 20px rgba(52, 58, 64, 0.1);
		}
	</style>

</head>


<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark bg-light" id="navbar-sticky">
        <div class="container-fluid px-lg-5">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="https://credbuddha.com/" style="width: 200px;">
                <img src="<?php echo base_url(); ?>assets/site/images/logo/logo.webp" alt="" width="100%" id="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    <li class="nav-item p-2">
                        <a href="https://credbuddha.com/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item p-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLoans" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Loans
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLoans">
                            <li><a class="dropdown-item" href="https://credbuddha.com/personal_loan">Personal Loan</a></li>
                            <li><a class="dropdown-item" href="https://credbuddha.com/business_loan">Business Loan</a></li>
                        </ul>
                    </li>
					<li class="nav-item p-2">
                        <a href="https://credbuddha.com/" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="https://credbuddha.com/" class="nav-link">Features</a>	
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#screenshot" class="nav-link">Screenshot</a>
                    </li> -->
                    <li class="nav-item p-2">
                        <a href="https://credbuddha.com/" class="nav-link">Testimonial</a>
                    </li>

                    <li class="nav-item p-2">
                        <a href="https://credbuddha.com/" class="nav-link"style='text-wrap: nowrap' >Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <!-- Your additional content here -->
                    </li>
                </ul>
                <img src="<?php echo base_url(); ?>assets/site/images/play_store.png" alt="" height="100%" />
            </div>
        </div>
    </nav>
	<div class="container" style="padding-top: 150px;">
		<h1 class="text-center" style="text-transform: uppercase;">Personal Loan - <span style="color: #55b019;">CredBuddha</span></h1>

		<div class="mt-5 head">
			<div>
				<img src="https://credbuddha.com/assets/site/images/bg2.jpg" width="90%" style="border: 1px solid transparent; border-radius: 25px;" alt="">
			</div>
			<div class="mt-2">
				<h3>Get Instant PersonalLoan</h3>
				<div class="mt-4">
					<p class="step">Minimum Documentation</p>
					<p class="step">No need for a Collateral</p>
					<p class="step">Loan is multi-purpose</p>	
					<p class="step">Quick Disbursal of Loan Amount</p>
					<p class="step">Flexible Repayment Tenure</p>
					<p class="step">Simple EMI Facilities</p>
				</div>
			</div>	
		</div>
		<div class="mt-5" style="text-align: center;">
			<a href="<?php echo base_url(); ?>form" class="btn btn-gradient-primary w-25" style="margin-bottom: 20px;">Apply Now</a>
		</div>
		<div class="mt-4">
			<h4>About CredBuddha Personal Loans</h4>
			<p>We understand that life is full of unexpected expenses and opportunities. Whether you're planning a dream
				wedding, consolidating debt, or simply need some extra cash for a special purchase, our personal loans are
				designed to provide you with the financial flexibility you need to achieve your goals. CredBuddha provides
				great financial solutions to find your personal loans from pre-approved banks.</p>
		</div>
		
		<div class="mt-4">
			<h4>Why Choose CredBuddha Personal Loans?</h4>
			<ul>
				<li>Competitive Interest Rates</li>
				<li>Flexible Repayment Options</li>
				<li>Quick Approval Process</li>
				<li>No Collateral Required</li>
				<li>Loan Amount Tailored to Your Needs</li>
			</ul>
		</div>
		<div class="mt-4">
			<h4>Steps to Apply for a Personal Loan in CredBuddha</h4>
			<ol>
				<li>Visit <a href="https://credbuddha.com">credbuddha.com</a> or download/install the CredBuddha loan app
					(Android or iOS).</li>
				<li>Open the personal loan application page. Provide the mobile number and enter the received OTP.</li>
				<li>Specify the desired loan amount and personal email, then choose the personal loan option.</li>
				<li>Choose the Employment type (Salaried, Self-Employed, Student) and the salary mode (bank or cash).</li>
				<li>Enter your work details (Including Company name, No. of years in service, and Designation).</li>
				<li>Enter your personal details (Including Full Name, PAN, address DOB, and Gender).</li>
				<li>Provide your communication address and income details and click the "Submit" button.</li>
			</ol>
			<p>As per the details, suitable lenders will be allocated, and their respective details will be shared for
				further proceedings.</p>
		</div>
		
		<div class="mt-4">
			<h4>Tips to Avoid Loan Rejection</h4>
			<ul>
				<li>Check Your Credit Score</li>
				<li>Review Your Credit Report</li>
				<li>Maintain Stable Employment</li>
				<li>Debt-to-Income Ratio</li>
				<li>Avoid Multiple Loan Applications</li>
				<li>Provide Accurate Information</li>
				<li>Have a Stable Residential History</li>
				<li>Limit Outstanding Debt</li>
				<li>Maintain Savings</li>
				<li>Consider a Co-Signer</li>
				<li>Understand the Eligibility Criteria</li>
				<li>Communicate with the Lender</li>
			</ul>
		</div>
		
	</div>
	<footer class="bg-dark px-3 mt-4">
		<div class="row py-3">
			<div class="col-12" style="display: flex; justify-content: space-between; color: white;">
				<small class="foot">Powered by Intexmmedia ®. All Rights Reserved</small>
				<div>
					<a href="https://credbuddha.com/page/privacy_policy" style="color: white; text-decoration: none; text-align: right;">
						<small>Privacy Policy</small>
					</a>
					<a href="https://credbuddha.com/page/terms_and_conditions" style="color: white; text-decoration: none; text-align: right;">
						<small> | Terms and conditions</small>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- /container-fluid -->

	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/site/js/jquery-3.7.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/site/js/common_scripts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/site/js/velocity.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/site/js/functions.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const form = document.getElementById("wrapped");
			const steps = form.querySelectorAll(".step");
			let currentStep = 0;

			// Function to show current step
			const showStep = (stepIndex) => {
				steps.forEach((step, index) => {
					step.style.display = index === stepIndex ? "block" : "none";
				});

				// Show/hide buttons based on current step
				const prevButton = form.querySelector(".backward");
				const nextButton = form.querySelector(".forward");
				const submitButton = form.querySelector(".submit");

				if (stepIndex === 0) {
					prevButton.style.display = "none";
				} else {
					prevButton.style.display = "inline-block";
				}

				if (stepIndex === steps.length - 1) {
					nextButton.style.display = "none";
					submitButton.style.display = "inline-block";
				} else {
					nextButton.style.display = "inline-block";
					submitButton.style.display = "none";
				}
			};

			// Function to handle click on "Next" button
			const nextButton = form.querySelector(".forward");
			nextButton.addEventListener("click", function (event) {
				event.preventDefault();
				if (validateStep(currentStep)) {
					currentStep++;
					if (currentStep >= steps.length) {
						currentStep = steps.length - 1; // Ensure currentStep does not exceed the number of steps
					}
					showStep(currentStep);
				}
			});

			// Function to handle click on "Previous" button
			const prevButton = form.querySelector(".backward");
			prevButton.addEventListener("click", function (event) {
				event.preventDefault();
				currentStep--;
				if (currentStep < 0) {
					currentStep = 0; // Ensure currentStep does not go below 0
				}
				showStep(currentStep);
			});

			// Function to handle click on "Submit" button
			const submitButton = form.querySelector(".submit");
			submitButton.addEventListener("click", function (event) {
				event.preventDefault();
				if (validateStep(currentStep)) {
					// Redirect to Google.com
					window.location.href = "https://www.google.com";
				}
			});

			// Validation function for each step
			const validateStep = (stepIndex) => {
				const inputs = steps[stepIndex].querySelectorAll("input, select");
				let isValid = true;

				inputs.forEach(input => {
					if (input.hasAttribute('required')) {
						if (input.type === 'radio') {
							const radioGroup = form.querySelectorAll(`input[name="${input.name}"]`);
							const radioContainer = input.closest('.form-group');
							const checked = Array.from(radioGroup).some(radio => radio.checked);
							if (!checked) {
								radioContainer.style.borderColor = "red";
								isValid = false;
							} else {
								radioContainer.style.borderColor = ""; // Remove border color if at least one radio is checked
							}
						} else if (input.value.trim() === '') {
							input.style.borderColor = "red";
							isValid = false;
						} else {
							input.style.borderColor = "";
						}
					}

					// Additional validations
					if (input.getAttribute('name') === 'phone') {
						if (!/^\d{10}$/.test(input.value)) {
							input.style.borderColor = "red";
							isValid = false;
						}
					} else if (input.getAttribute('name') === 'email') {
						if (!/\S+@\S+\.\S+/.test(input.value)) {
							input.style.borderColor = "red";
							isValid = false;
						}
					} else if (input.getAttribute('name') === 'pancard') {
						if (!/[A-Z]{5}\d{4}[A-Z]{1}/.test(input.value)) {
							input.style.borderColor = "red";
							isValid = false;
						}
					} else if (input.getAttribute('name') === 'Address Pincode') {
						if (!/^\d{6}$/.test(input.value)) {
							input.style.borderColor = "red";
							isValid = false;
						}
					}
					else if (input.getAttribute('name') === 'Name') {
						// Name validation
						if (!/[0-9]/.test(input.value)) {
							input.style.borderColor = "red";
							isValid = false;
						} else {
							input.style.borderColor = "";
						}
					}
				});

				return isValid;
			};

			showStep(currentStep);
		});
	</script>



</body>

</html>