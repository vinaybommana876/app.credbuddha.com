<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibe - Personal Loan Page</title>

    <!-- Font Family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo base_url(); ?>assets/offerTwo/css/style.css" rel="stylesheet">
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '650677626548030');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=650677626548030&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>
    <div class="confetti" style="position: absolute;">
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        
    
      </div>
    <main>
        <div class="">
            <div class="container">
        
                <section>
                    <div class="row g-0">
                        <div class="col-12 d-flex justify-content-center pt-3 pb-1">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp8lizUMdCzv59pKYv0Ek6M-Ukn-HkG9HMCrcHIU2wVw&s" width="100px" class="img-fluid" alt="Logo">
                        </div>
                    </div>
                </section>



                <section class="mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card p-0">
                                <div class="d-flex justify-content-center py-3">
                                    <img src="https://cdn-icons-png.flaticon.com/512/5372/5372351.png" width="60px" class="img-fluid" alt="">
                                </div>
                                <div class="d-flex justify-content-center text-center">
                                    <h1 class="text-dark ">
                                        <div class="font-weight-normal mb-3"> SORRY! <br><span class="text-info" style="color: orange !important">You are not approved with Fibe due to internal criteria. Please reapply after 3 months.</span></div>

                                      
                                    </h1>
                                </div>

                                <hr class="border-hr">

                                <div class=" flex-column text-center px-3">
                                    <h4 class="text-dark py-0 my-0"> Fibe - Personal Loan App</h4>
                                    <p class="py-0 mt-0 mb-3"><strong> <small> Instant Disbursement in 5 mins <br>
Low interest<br>
Hassle-free process
                                            </small> </strong></p>

                                </div>
                             

                                <!-- <hr class="border-hr-dotted">


                                -->

                                <!-- <hr class="border-hr-dotted">
                                <br> -->
                                <!-- <div class="d-flex justify-content-between text-center px-3">

                                    <p class=" py-0 my-0"> <strong> Amount</strong></p>

                                    <p class="text-info py-0 my-0">INR 45,000</p>

                                </div> -->

                                <!-- <div class="d-flex justify-content-between text-center px-3">

                                    <p> <strong> EMI</strong></p>

                                    <p class="text-info">6 Months</p>

                                </div> -->

<?php

if(isset($_GET['utm_source'])){
$utm_source = @$_GET['utm_source'];
} else {
$utm_source = @$lead->utm_source;
}
?>


<div class="form-floating custom-radius-last hero__info__button">
<!-- <a href="https://trk.i1x.in/click?campaign_id=14&pub_id=2&source=<?php echo @$utm_source; ?>"><button class="btn btn-success w-100 py-3">Download <img width="15px"
        src="<?php echo base_url(); ?>assets/offerTwo/img/right.svg" class="img-fluid align-middle me-1" alt=""></button></a> -->
                                </div>



                            </div>
                        </div>
                    </div>
                </section>

                <section class="position-relative ">
                   <div class="row">
                    <div class="col-12">
                        <div class="plStepsSection"><div class="plStepsHeading">
                            03 Easy Steps
                        </div> <div class="plStepsListBlock"><div class="eachStepBlock stepSuccess"><span class="stepHeading">
                                    01
                                </span> <span class="stepDescription">
Download from Play Store
                                </span></div> <div class="eachStepBlock stepWaring"><span class="stepHeading">
                                    02
                                </span> <span class="stepDescription">
Fill the details and Complete the KYC.
                                </span></div> <div class="eachStepBlock stepPrimary"><span class="stepHeading">
                                    03
                                </span> <span class="stepDescription">
Amount credited to Your account
                                </span></div></div> <div class="plStepsDescription">
<!--                       and money will be disbursed to your account -->
                        </div></div>
                    </div>
                   </div>

                    
                </section>
            </div>
            <!-- <div class="col-12 my-5 d-flex justify-content-center sticky-top">
                <a href="" class="btn btn-hover w-100 d-block color-1">Apply Now</a>
            </div> -->

            <!-- <div class="tc">
                <h6><a href="text-info">T & C Apply</a> </h6>
            </div> -->
        </div>

        <footer class="bg-dark px-3 text-center mt-3">
            <div class="row py-3">
                <div class="col-12">
                    <small> Copyright ©2023 LowCredit ®. All Rights Reserved</small>
                </div>
            </div>
        </footer>
    </main>



    <!-- Loader -->
    <!-- <div class="loader-position">
        <img src="<?php echo base_url(); ?>assets/offerTwo/img/loader.svg" width="30px" class="img-fluid me-2" alt="">
        <br>
        <h6 class="font-18 mb-2">Processing Your Loan</h6>
        <p class="px-5">We are checking your loan approval It'll just take a moment</p>
    </div> -->
</body>

</html>
