<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Alertify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css" />

<!-- Alertify JS -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

    <title>Loan Application</title>
    <style>
        /* input, select{
            border: 0 !important;
            border-bottom: 2px solid rgba(0, 0, 0, 0.5) !important;
            border-radius: 0px !important;
            padding-left: 0 !important;
        } */
        .c,
        select {
            /* border: 1px solid rgba(0, 0, 0, 0.3) !important; */
            /* border-radius: 25px !important; */
            /* box-shadow: 2px 2px 2px gray; */
            width: 100% !important;
            height: 40px !important;
            /* background: #F6F8FE !important; */
            padding: 0 16px !important;
            border-radius: 16px !important;
            color: #111111 !important;
            font-size: 14px !important;
            /* font-weight: 500 !important; */
        }

        .c {
            border-radius: 25px;
            border: 1px solid #D5D5D5;
            background: var(--Color, #FFF);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50);
        }

        label {
            font-size: 14px !important;
            /* color: #78828A; */
        }

        button {
            position: relative;
            bottom: 0;
        }

        .tc {
            font-size: 0.80rem;
            color: #000;
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100vw;
            text-align: center;
            font-size: 0.60rem;
            border-top: 1px solid gray;
            height: 15px;
        }

        * {
            font-family: "Chivo", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Chivo", sans-serif;
            padding-top: 5px;
            background-color: #fff;
            font-size: 15px;
            /* height: 100%;
            background: linear-gradient(180deg, #404252 45%, #000); */
            /* background: linear-gradient(135deg, #000 0%, #0f1c52 40%, #000 100%); */
            /* background-color: #DFE6E9; */

        }

        img {
            background-color: white;
            border: 1px solid white;
            border-radius: 50%;
        }

        .main {
            width: 100vw;
            height: 100vh;
            /* margin-top: 20px; */
        }

        .form-step {
            display: none;
        }

        form {
            color: white;
            width: 80vw;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            border-radius: 15px;
            padding-top: 0px !important;
            /* background: rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18); */
        }


        .form-group {
            padding-top: 5px;
        }

        .des {
            font-size: 1.2rem;
            text-align: center;
            margin: 0;
            padding: 0;
            margin-top: 20px;
        }

        .rounded-pill {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            background-color: white;
            margin-top: 10px;
        }

        .progress-bar {
            background-color: #50c9c9;
            /* background-color: #62b034; */
        }

        #nextButton {
            width: 80%;
            height: 50px;
            flex-shrink: 0;
            border-radius: 0px 25px 25px 0px;
            background: var(--Profession-colors-text, #000);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50);
            color: #39d6dc;
            display: flex;
            align-items: center;
            justify-content: right;
            gap: 5px;
            margin-left: 18px;
        }

        .bg {
            /* background-color: white; */
            color: black;
            font-family: sans-serif;
        }

        label {
            font-size: 0.8rem;
        }

        .progress {
            height: 0.5rem !important;
        }

        .text {
            width: 80vw !important;
        }

        .line {
            height: 5px;
            width: 20vw;
            background-color: rgba(255, 255, 255, 0.5);
            border: 1px solid transparent;
            border-radius: 20px;
        }

        .text1 {
            color: #39d6dc;
            font-size: 20px;
            font-family: Vardana;
            text-align: center;
        }

        .imge {
            animation: rotate 2s linear infinite;
            margin-top: 10%;
            width: 50px;
            height: 50px;
            background-repeat: no-repeat;
            background: url(https://lowcredit.in/assets/loan/loading_circle1.png);
            background-size: contain;
        }

        #total {
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        #total {
            background: var(--Profession-colors-text, #000);
            display: none;
        }

        #total_form {
            display: flex;
        }

        .top {
            text-align: center;
            width: 100%;
            background: var(--Color, #FFF);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50);
            justify-content: center;
        }

        .left {
            text-align: center;
            width: 20%;
            height: 50px;
            border-radius: 25px 0px 0px 25px;
            border: 1px solid #D5D5D5;
            background: var(--Color, #FFF);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50);
            justify-content: center;
            display: flex;
            align-items: center;
        }

        .button-container {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .form-group {
            padding-top: 10px;
        }
        .alertify.ajs-maximized .ajs-body, .alertify.ajs-resizable .ajs-body {
            min-height: 170px;
            display: inline-block;
        }
        .ajs-button
        {
            color: #39d6dc;
            background: var(--Profession-colors-text, #000);
        }
        .ajs-content
        {
            font-size: 18px;
        }
        textarea.form-control {
            min-height: calc(5.5em +(.75rem + 2px));
        }
    </style>
</head>

<body>
    <div id="total">
        <div class="text1">Please wait to see the complete offer</div>
        <div class="imge">
        </div>
        <div class="text1">Loading...</div>
    </div>
    <button id="popupBtn" style="display: none;">Open Pop-up</button>
    <div class="main justify-content-start align-items-center flex-column col-12" id="total_form">
        <!-- <img src="<?php echo base_url(); ?>assets/loan/logo.png" alt="" width="40%"> -->
        <!-- <div class="top">
            <h2 style="font-size: 30px;font-weight: 600;">Apply Loan</h2>
        </div> -->
        <div class="text">
            <h5 class="pt-3 pb-3"><b>Your Eligible for Loan upto Rs.5,00,000/-<b></h5>
            <p style="margin-bottom: 0;"><b>Fill out your details</b></p>
        </div>
        <div class="step_progress_bar" style="width: 80vw;">
            <div class="progress rounded-pill">
                <div class="progress-bar" id="bar"></div>
            </div>
            <span class="text-end"><b>Step 1 to 4</b></span>
        </div>

        <form class="needs-validation pb-0 pt-0 bg" action="#" id="signUpForm">
            <!-- <h3 class="des text-uppercase"><b></b></h3> -->
            <div id="step-1" class="mt-4">
                <div class="step_content d-flex justify-content-between">
                    <!-- <h5>Personal Loan</h5> -->
                </div>
                <div class="form-group">
                    <label for="first_name"><b>First Name (as per PAN)<b></label>
                    <input type="text" class="form-control c" id="first_name" name="first_name"
                        placeholder="Enter your first name" style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="last_name"><b>Last Name (as per PAN)</b></label>
                    <input type="text" class="form-control c" id="last_name" name="last_name"
                        placeholder="Enter your last name" style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="mobile"><b>Mobile Number</b></label>
                    <input type="number" class="form-control c" id="mobile" name="mobile"
                        placeholder="Enter mobile number" onchange="validateMobileNumber(this)"
                        style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="employment"><b>Employment Type</b></label>
                    <select class="form-select c" aria-label="Default select example" id="employment"
                        name="employee_type" style="font-weight: 600;">
                        <option value="1" selected>Salaried Full-time</option>
                        <option value="2">Self Employed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="salary"><b>Salary</b></label>
                    <select class="form-select c" aria-label="Default select example" id="salary" name="income">
                        <option value="100000"><b>Below Rs.2,00,000/-</b></option>
                        <option value="200000"><b>Rs.2,00,000/- to Rs.5,00,000/-</b></option>
                        <option value="300000"><b>Above Rs.5,00,000/-</b></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pincode"><b>Pincode</b></label>
                    <input type="number" class="form-control c" id="pincode" placeholder="pincode" name="pincode"
                        style="font-weight: 600;">
                </div>
            </div>

            <div id="step-2" class="mt-4" style="display: none;">
                <div class="step_content d-flex justify-content-between">
                    <!-- <h5>Personal Loan</h5> -->
                    <!-- <span class="text-end">Step 2 to 4</span> -->
                </div>
                <div class="form-group mt-2">
                    <label for="salary" class="col-12"><b>Salary received in</b></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="salary_recived_in" id="inlineRadio1"
                            value="1" required>
                        <label class="form-check-label" for="inlineRadio1"><b>Direct Bank Account</b></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="salary_recived_in" id="inlineRadio2"
                            value="2" required>
                        <label class="form-check-label" for="inlineRadio2"><b>Cheque</b></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="salary_recived_in" id="inlineRadio2"
                            value="3" required>
                        <label class="form-check-label" for="inlineRadio2"><b>Cash</b></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="company-name"><b>Company Name</b></label>
                    <input type="text" class="form-control c" id="company-name" placeholder="Enter Company name"
                        name="company" style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="loan-amount"><b>Loan Amount</b></label>
                    <input type="number" class="form-control c" id="loan-amount" placeholder="Enter Loan amount"
                        name="loan_amount" style="font-weight: 600;">
                </div>
            </div>

            <div id="step-3" class="mt-4" style="display: none;">
                <div class="step_content d-flex justify-content-between">
                    <!-- <h5>Personal Loan</h5> -->
                    <!-- <span class="text-end">Step 3 to 4</span> -->
                </div>
                <div class="form-group">
                    <label for="panCardNo"><b>Pancard Number</b></label>
                    <input type="text" class="form-control text-uppercase c" id="panCardNo" name="pan_card_no"
                        placeholder="Enter here" style="font-weight: 600;" onchange="isValidPanCardNo(this)">
                </div>

                <div class="form-group">
                    <label for="dob"><b>Select DOB</b></label>
                    <input type="date" class="form-control c" id="dob" placeholder="DD/MM/YYYY" name="dob"
                        style="font-weight: 600;" required> 
                </div>

                <div class="form-group mt-2">
                    <label for="salary" class="col-12"><b>Gender</b></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" required>
                        <label class="form-check-label" for="inlineRadio1"><b>Male</b></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F" required>
                        <label class="form-check-label" for="inlineRadio2"><b>Female</b></label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="text" class="form-control c" id="email" name="email" placeholder="Enter your email"
                        style="font-weight: 600;" aria-describedby="emailHelp">
                </div>
            </div>

            <div id="step-4" class="mt-4" style="display: none;">
                <div class="step_content d-flex justify-content-start">
                    <!-- <h5>Personal Loan</h5> -->
                    <!-- <span class="text-end">Step 4 to 4</span> -->
                </div>
                <div class="form-group">
                    <label for="address"><b>Address</b></label>
                    <textarea style="min-height: calc(5em +(.75rem + 2px));" type="text" class="form-control c" id="address" name="address" placeholder="Enter here"
                        style="font-weight: 600;"></textarea>
                </div>
                <div class="form-group">
                    <label for="locality"><b>Locality</b></label>
                    <input type="text" class="form-control c" id="locality" name="locality" placeholder="Enter here"
                        style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="city"><b>City</b></label>
                    <input type="text" class="form-control c" id="city" name="city" placeholder="Enter here"
                        style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <label for="state"><b>State</b></label>
                    <input type="text" class="form-control c" id="state" name="state" placeholder="Enter here"
                        style="font-weight: 600;">
                </div>
                <div class="form-group">
                    <input type="checkbox" checked="">
                    <span style="color: #000; font-size: 12px; line-height: 0.5">I agree to receive news, updates,
                        offers, and promotions from LowCredit!, including Email, RCS, and Whatsapp. Can withdraw consent
                        anytime.</span>
                </div>
            </div>
            <div class="button-container">
                <div class="left mt-5" onclick="previous()">
                    <span style="font-size: 22px;">&lt;</span>
                </div>
                <button type="submit" class="btn mt-5" id="nextButton" onclick="next()">
                    <b>Next</b> <span style="font-size: 20px;">&gt;</span>
                </button>
            </div>



        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
        function previous() {
            if (c > 1) {
                p -= 25;
                document.getElementById('step-' + c).style.display = "none";
                c--;
                document.getElementById('step-' + c).style.display = "block";
                document.getElementById('nextButton').innerHTML = "Next";
                document.getElementById('bar').style.width = p + "%";
                updateStepNumber(); // Update step number after decrementing
            }
            // document.getElementById('ra').value = c + 1;
        }

        function showloader() {
            // Assuming you want to hide the form page and display the total page
            document.getElementById('total_form').style.display = "none";
            document.getElementById('total').style.display = "flex";

            // Here you can place your AJAX request or any other form submission logic
        }
        function hideloader() {
            // Assuming you want to hide the form page and display the total page
            document.getElementById('total_form').style.display = "flex";
            document.getElementById('total').style.display = "none";

            // Here you can place your AJAX request or any other form submission logic
        }
        var c = 1;
        var p = 25;
        var stepsSpan = document.querySelector('.text-end');

        document.getElementById('bar').style.width = p + "%";

        function updateStepNumber() {
            stepsSpan.textContent = "Step " + c + " to 4";
        }

        function next() {
            var currentStep = document.getElementById('step-' + c);

            // Check if there are empty or invalid fields in the current step
            var invalidFields = checkInvalidFields(currentStep);

            if (invalidFields.length > 0) {
                // Alert if there are invalid fields
                // alert("Please fill out all  fields correctly before proceeding.");
                // document.getElementById('nextButton').addEventListener('click', function (event) {
                //     document.getElementById('popupBtn').style.display = 'block';
                //     event.preventDefault(); // Prevent the default behavior (e.g., submitting a form or following a link)
                //     window.open('popup.html', 'Popup', 'width=400,height=300'); // Open the pop-up window
                // });
                alertify.myAlert("Please fill in all required fields.");
                event.preventDefault();
                return;
            }

            var pincodeInput = document.getElementById('pincode');
            if (pincodeInput.value.length !== 6) {
                // Alert if the picode input is not 6 digits
                alertify.myAlert("Please enter a 6-digit PIN code.");
                return;
            }
            if (c === 2) {
                // Check if the "Salary received in" field is selected
                var salaryReceivedInChecked = document.querySelector('input[name="salary_recived_in"]:checked');
                if (!salaryReceivedInChecked) {
                    // If not selected, display an alert and do not proceed
                    alertify.myAlert("Please select how you receive your salary.");
                    return;
                }
            }
            if (c === 3) {
                // Check PAN card validation for step 3
                var panCardInput = document.getElementById('panCardNo');
                if (!isValidPanCardNo(panCardInput.value)) {
                    alertify.myAlert("Please enter a valid PAN card number.");
                    return;
                }
            }
            
            if (c < 4) {
                p += 25;
                currentStep.style.display = "none";
                c++;
                document.getElementById('step-' + c).style.display = "block";
                event.preventDefault();
                if (c === 4) {
                    document.getElementById('nextButton').innerHTML = "Submit";
                }
                document.getElementById('bar').style.width = p + "%";

                updateStepNumber(); // Update step number after incrementing
            } else if (c === 4) {
                // var form = document.getElementById('form');
                // form.action = 'final.html';
                // form.submit();

                    document.getElementById("signUpForm").addEventListener("submit", function(event){
                    event.preventDefault();
                    // alert('Hello Vinod');
                    showloader(); 
                    var form = $('#signUpForm')[0];
                    var data = new FormData(form);	
                    $.ajax({
                    type : 'POST',
                    url : '<?php echo base_url("app/create_loan_application"); ?>',
                    data : data,
                    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                    processData: false, // NEEDED, DON'T OMIT THIS
                    success: function(data) { 
                    hideloader();
                    var result = JSON.parse(data);
                    $('.loading').hide();
                    if(result.status == 'success'){
                        window.location.replace("<?php echo base_url('app/offer?offer_id='); ?>"+ result.rd_offer_id + "&lead_id=" + result.lead_id);
                    } else if(result.status == 'error'){
                    $.confirm({
                    title: 'Sorry!',
                    content: 'Some Error Occurred, Please Try Again!',
                    buttons: {
                    somethingElse: {
                    text: 'Okay',
                    btnClass: 'btn-blue',
                    keys: ['enter', 'shift'],
                    action: function(){
                    window.location.replace("<?php echo base_url('offers/page_one'); ?>");
                    }
                    }
                    }
                    });
                    }
                    }
                    });
                    //});
                    return false;

                    });
                    
            }
        }

        function checkInvalidFields(step) {
            var formElements = step.querySelectorAll('input, select, textarea');
            var invalidFields = [];

            formElements.forEach(function (element) {
                if (element.value.trim() === '') {
                    element.style.border = "1px solid red";
                    invalidFields.push(element);
                } else if (element.id === 'panCardNo' && !isValidPanCardNo(element.value)) {
                    element.style.border = "1px solid red";
                    invalidFields.push(element);
                } else if (element.id === 'email' && !isValidEmail(element.value)) {
                    element.style.border = "1px solid red";
                    invalidFields.push(element);
                } else if (element.id === 'name' && !isValidName(element.value)) {
                    element.style.border = "1px solid red";
                    invalidFields.push(element);
                } else {
                    element.style.border = "";
                }
            });

            if (invalidFields.length > 0) {
                alertify.myAlert("Please fill in all required fields.");
            }

            return invalidFields;
        }

        function isValidName(name) {
            var regex = /^[A-Za-z\s]+$/;
            return regex.test(name);
        }

        function isValidEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function isValidPanCardNo(pan) {
            let regex = /^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}$/i;
            return regex.test(pan);
        }

        function validateMobileNumber(input) {
            var mobileNumber = input.value;

            if (mobileNumber.length !== 10) {
                alertify.myAlert(mobileNumber + " is not a valid mobile number.");
            }
        }

        window.addEventListener('load', function () {
            updateDisplay();

            window.addEventListener('resize', function () {
                updateDisplay();
            });
        });

        function updateDisplay() {
            var body = document.body;

            if (window.innerWidth <= 768) {
                body.style.display = 'flex';
            } else {
                body.style.display = 'none';
            }
        }

        if (!alertify.myAlert) {
            // Define a new dialog
            alertify.dialog('myAlert', function factory() {
                return {
                    main: function (message) {
                        this.message = message;
                    },
                    setup: function () {
                        return {
                            buttons: [{ text: "OK", key: 27 }],
                            focus: { element: 0 }
                        };
                    },
                    prepare: function () {
                        this.setHeader('Alert');
                        this.setContent(this.message);
                    }
                };
            });
        }


    </script>

</body>

</html>