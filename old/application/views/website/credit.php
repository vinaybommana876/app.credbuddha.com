<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Credit Card</title>
    <style>
        * {
            font-family: 'Chivo', sans-serif;
        }

        .zi {
            z-index: 99;
        }

        .points {
            color: black;
        }

        li {
            padding: 5px;
            font-size: 16px;
        }

        body {

            /* background: white; */
            background-color: white;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        .wrapper {
            max-width: 460px;
            margin: auto;
            background-color: white;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 15px 25px;
            position: relative;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif !important;
        }

        .mainlogo {
            display: table;
            text-align: center;
            margin: 0px auto 0px;
        }

        p {
            color: black;
            text-align: center;
            padding: 0px 15px;
            font-size: 14px;
        }

        h2 {
            color: black;
            /* margin: 15px 0px 5px; */
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            text-align: center;
            padding: 0px 0px;
            font-size: 22px;
        }

        .footer {
            color: black;
            font-size: 12px;
            padding: 0px 0px;
            margin-top: 20px;
            text-align: center;
            border-top: 1px solid #ccc;
            /* position: fixed;
            left: 52px;
            bottom: 25px; */
        }

        .bankcard {
            margin: 15px 0px 15px;
            display: table;
            width: 100%;
        }

        .bankcardinner {
            align-items: start;
            justify-items: normal;
            border-radius: 5px;
            padding: 15px;
            background: #000;
            min-height: 180px;
            border-radius: 8px 8px 8px 8px;
            background-color: #2d343671;
            background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);

            box-shadow: 11px 15px 14.8px 0px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(45px);
        }

        .cardheader {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
            align-items: start;
            justify-items: normal;
            margin-bottom: 20px;
        }

        .cardheader .logo img {
            width: 100%;
        }

        .cardheader .text {
            color: white;
            text-align: right;
        }

        .cardheader {
            font-size: 14px;
        }

        .cc {
            font-size: 25px;
            font-weight: 500;
        }

        .cardnumber {
            color: white;
            font-size: 20px;
            text-align: left;
            letter-spacing: 4px;
        }

        .cardfooter {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 15px;
            align-items: start;
            justify-items: normal;
            margin-top: 15px;
        }

        .cardfooter .name {
            color: white;
            font-size: 17px;
            text-align: left;
        }

        .cardfooter .date {
            color: white;
            font-size: 20px;
            text-align: right;
            font-weight: 700;
            letter-spacing: 3px;
            font-family: 'Times New Roman';
        }

        .cardfooter .date span {
            color: #ddd;
        }

        .head {
            width: 100%;
            display: flex;
            justify-content: center;

        }

        .backimg {
            position: absolute;
            left: 10px;
        }

        ul {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .logo {
            margin-bottom: 20px;
        }

        .apply-div {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .apply a {
            display: flex;
            text-align: center;
            color: #38e1e8;
            background-color: #2d3436;
            width: 240px;
            flex-shrink: 0;
            border-radius: 50px;
            background: var(--Profession-colors-text, #000);
            box-shadow: 0px 3.358px 3.358px 0px rgba(0, 0, 0, 0.50);
            justify-content: center;
        }

        .apply h4 {
            padding: 10px 0px 10px 0px;
        }

        .apply h4 a {
            text-decoration: none;
        }

        h4 {
            margin-bottom: 0px;
            line-height: 2;

        }

        @media (max-width: 361px) {

            .bankcardinner
            {
                padding: 0px;
            }
        }
    </style>
</head>

<body style=" font-family: 'Chivo', sans-serif;">
    <div class="wrapper">
        <!-- <div class="head">
            <div class="backimg">
                <img src="./assets/backarrow.svg">
            </div>
            <div class="chead">
                <h4 style="font-size: 14px;"><b>Credit Card</b></h4>
            </div>
        </div> -->
        <h2 class="mt-4" style="font-size: 22px;"><b><span style="color: #4ed8e3;">Life Time Free </span>Credit Card</b>
        </h2>
        <h2 style="font-size: 24px;"><b>Get Up to <span style="color: #4ed8e3;"> Rs.1,00,000/-</span></b></h2>
        <div class="bankcard ">
            <div class="bankcardinner shadow mt-4">
                <div class="cardheader">
                    <div class="cc" style="color: #fff;">Credit Card</div>
                    <div class="text cc">
                        <img width="100px" src="<?php echo base_url(); ?>assets/bajajlogo.png">
                    </div>
                </div>
                <div class="logo"><img style="width: 50px;" src="assets/chip.png" class="img-fluid" alt="Logo"></div>
                <div class="cardnumber">
                    XXXX XXXX XXXX 3456
                    <div style="display: flex;">
                        <div>
                            <span style="font-size: 10px;display: block;">Valid</span><span
                                style="font-size: 10px;display: block;">THRU</span>
                        </div>
                        <span style="font-size: 20px;display: block;letter-spacing: -3px;">01/80</span>
                    </div>
                </div>
                <div class="cardfooter">
                    <div class="name">Mohan Majji</div>
                    <div class="date">VISA</div>
                </div>
            </div>
            <div class="mt-5">
                <h2 style="font-size: 22px;"><b>Swipe in 5!</b></h2>
                <h2 style="text-align: left;font-size: 22px;"><b>Instant credit card approval</b></h2>
                <ul class="mt-3" style="list-style-type:none;">
                    <li>- No Monthly Interest</li>
                    <li>
                        - Get Cashbacks on every transaction
                    </li>
                    <li>
                        - Great Discounts (%) on Top brands</li>
                    <li> - Easy Process</li>
                    <li> - Get Approval in 5 Minutes</li>
                </ul>
            </div>
            <div class="apply-div">
                <div class="apply mt-3 mb-2">
                    <h4 style="font-size: 24px;"><a
                            href="https://trk.i1x.in/click?campaign_id=475&pub_id=2&url_id=1&source=test">Apply now</a>
                    </h4>
                </div>
            </div>

        </div>
    </div>


</body>

</html>