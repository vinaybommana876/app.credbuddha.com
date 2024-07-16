<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="credbuddha website">
    <meta name="keywords" content="credbuddha,loan,banks,nbfcs">
	<title>Apply Loan </title>

	<!-- <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet"> -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/site/images/favicon.webp" />

	<!-- BASE CSS -->
	<link href="<?php echo base_url(); ?>assets/site/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/site/css/style2.css" rel="stylesheet">
	<!-- <link href="css/vendors.css" rel="stylesheet"> -->

	<!-- YOUR CUSTOM CSS -->
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap"
		rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>
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
		border-radius: 10px;
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
</style>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark bg-light" id="navbar-sticky">
		<div class="container-fluid">
			<!-- LOGO -->
			<a class="logo text-uppercase" href="https://credbuddha.com/" style="width: 100px;">
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
							<li><a class="dropdown-item" href="<?php echo base_url(); ?>personal_loan">Personal Loan</a>
							</li>
							<li><a class="dropdown-item" href="<?php echo base_url(); ?>business_loan">Business Loan</a>
							</li>
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
						<a href="https://credbuddha.com/" class="nav-link" style='text-wrap: nowrap'>Contact Us</a>
					</li>
					<li class="nav-item">
						<!-- Your additional content here -->
					</li>
				</ul>
				<img src="<?php echo base_url(); ?>assets/site/images/play_store.png" alt="" height="100%" />
			</div>
		</div>
	</nav>
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left"
				style="background-image: url(https://credbuddha.com/assets/site/images/loan1.jpg); background-size: cover; background-position: center; background-repeat: no-repeat;">
				<figure><img src="https://credbuddha.com/assets/site/images/loan1.jpg" alt="" class="img-fluid"
						style="background-size: contain;">
				</figure>
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
						<div id="progressbar"></div>
					</div>
					<h2 class="main_question mt-5" style="font-weight: 600; text-align: center; color: #55B018;">Apply &
						Get Loan
						Approved Instantly</h2><br>
					<!-- /top-wizard -->
					<form id="wrapped" method="POST">
						<input id="website" name="website" type="text" value="">
						<!-- Leave for security protection, read docs for details -->
						<div id="middle-wizard">
							<div class="step">

								<div class="form-group">
									<div class="name">
										<label>Name</label>
										<input type="text" class="box" placeholder="Enter your name" required
											pattern="[A-Za-z]">
									</div>
									<div class="number mt-2">
										<label>Mobile Number</label>
										<input type="number" class="box" name="phone" placeholder="Mobile Number"
											required>
									</div>
									<div class="space mt-2">

										<label>Employment Type</label>
										<select required>
											<option value="Salaried">Salaried</option>
											<option value="self">Self-Employed</option>
										</select>

									</div>
									<div class="space mt-2">

										<label>Salary</label>
										<select required>
											<option value="below 2">Below 2,00,000</option>
											<option value="2-5">Between 2,00,000 to 5,00,0000</option>
											<option value="above 5">Above 5,00,0000</option>
										</select>

									</div>
									<div class="space mt-2">
										<label>Pincode</label>
										<input type="number" class="box" name="Address Pincode" required>
									</div>
								</div>
							</div>
							<!-- /step-->
							<div class="step">

								<div class="form-group">
									<label id="radio-group">Salary received in</label>
									<div class="d-flex">
										<div class="d-flex p-2">
											<label for="bankac" style="text-wrap: nowrap;">
												<input type="radio" id="option1" name="options" value="option1"
													class="error" checked required> Direct Bank Account
											</label>
										</div>
										<div class="d-flex p-2"><label for="chequee" style="text-wrap: nowrap;">
												<input type="radio" id="option2" name="options" value="option2"
													class="required" required>Cheque
											</label></div>
										<div class="d-flex p-2"><label for="cash" style="text-wrap: nowrap;">
												<input type="radio" id="option3" name="options" value="option3"
													required>
												Cash</div>
										</label>
									</div>

									<div class="name  mt-2" required>
										<label>Company Name</label>
										<input type="text" class="box" placeholder="Enter your Company name" required>
									</div>
									<div class="number mt-2" required>
										<label>Loan Amount</label>
										<input type="number" class="box" name="loan"
											placeholder="Enter Your Loan Amount" required>
									</div>
								</div>
							</div>
							<!-- /step-->
							<div class="step">

								<div class="form-group">
									<div class="pancard">
										<label>Pan Card Number</label>
										<input type="text" class="box" placeholder="Enter PANCARD number" required
											name="pancard">
									</div>
									<div class="space mt-2">
										<label>Date Of Birth</label>
										<input type="date" id="birthday" name="birthday" class="box" required>
									</div>
									<label id="radio-group" class="mt-2">Gender</label>
									<div>
										<label for="male">
											<input type="radio" id="male" name="gender" value="male" class="error"
												checked required> Male
										</label>
										<label for="female">
											<input type="radio" id="female" name="gender" value="female"
												class="required" required>Female
										</label>
									</div>
									<div class="email mt-2">
										<label>Email Address</label>
										<input type="email" class="box" name="email" placeholder="Enter Your Email"
											required>
									</div>
								</div>

							</div>
							<!-- /step-->
							<div class="step">

								<div class="email mt-2">
									<label>Address</label>
									<input type="textarea" class="box" placeholder="Enter Your address" required>
								</div>
								<div class="locality mt-2">
									<label>Locality</label>
									<input type="text" class="box" placeholder="Enter Your Locality" required>
								</div>
								<div class="City mt-2">
									<label>City</label>
									<input type="text" class="box" placeholder="Enter Your City" required>
								</div>
								<div class="state mt-2">
									<label>State</label>
									<input type="textarea" class="box" placeholder="Enter Your State" required>
								</div>
								<br>
								<div class="agree mt-2">

									<p><input type="checkbox" checked>&nbsp;&nbsp;By Submitting this form I agree <span class="com"><a style="text-decoration: underline;" href="https://credbuddha.com/terms_conditions">T&C</a></span>
										,<span class="com"><a style="text-decoration: underline;" href="https://credbuddha.com/privacy_policy">Privacy
												Policy.</a></span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and I receiving SMS & WhatsApp communication.<span style="color: red;">*</span></p>
								</div>

							</div>
						</div>
						<!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward">Prev</button>
							<button type="button" name="forward" class="forward">Next</button>
							<button type="submit" name="process" class="submit" onclick="fun()">Submit</button>
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

			function generateRandomNumber() {
				const excludedNumbers = [2, 17, 23, 22, 27];
				let number;
				do {
					number = Math.floor(Math.random() * 38) + 1;
				} while (excludedNumbers.includes(number));
				return number;
			}

			// Function to generate the offer URL with the random number
			function generateOfferUrl() {
				const baseUrl = "https://credbuddha.com/app/offer?offer_id=";
				const offerId = generateRandomNumber();
				const url = baseUrl + offerId;
				return url;
			}

			//Function to handle click on "Submit" button
			const submitButton = form.querySelector(".submit");
			submitButton.addEventListener("click", function (event) {
				event.preventDefault();
				if (validateStep(currentStep)) {
					var offerUrl = generateOfferUrl();
					window.location.href = offerUrl;
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
					} else if (input.getAttribute('name') === 'Name') {
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