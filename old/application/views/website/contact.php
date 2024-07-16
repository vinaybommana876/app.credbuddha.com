<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" type="text/css" />
    <link rel="stylesheet"  href="<?php echo base_url() . 'assets/css/style.css' ?>" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <div class="col-md-8 mt-4 col-lg-6 text-center contact">
        <h1 style="font-family: Verdana;font-weight: 800;font-size: 30px;">Contact Us</h1>
    </div> -->
    <div class="col-md-10 offset-lg-1">
        <div class="contact-form rounded-lg mt-lg-0">
            <div class="card-body p-5">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFirstName" class="form-label"><b>First Name</b></label>
                                <input type="text" class="form-control" id="formFirstName"
                                    placeholder="Your first name..." style="font-weight: 600;" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formLastName" class="form-label"><b>Last Name</b></label>
                                <input type="text" class="form-control" id="formLastName"
                                    placeholder="Last first name..." style="font-weight: 600;" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formEmail" class="form-label"><b>Email Address</b></label>
                                <input type="email" class="form-control" id="formEmail"
                                    placeholder="Your email..." style="font-weight: 600;" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formPhone" class="form-label"><b>Phone Number</b></label>
                                <input type="number" class="form-control" id="formPhone"
                                    placeholder="Type phone number..." style="font-weight: 600;" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="formSubject" class="form-label"><b>Subject</b></label>
                                <input type="text" class="form-control" id="formSubject"
                                    placeholder="Type subject..." style="font-weight: 600;" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="formMessages" class="form-label"><b>Messages</b></label>
                                <textarea class="form-control" id="formMessages" rows="4"
                                    placeholder="Type messages..." style="font-weight: 600;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex;align-items: center;justify-content: center;">
                        <button type="submit" class="btn bg-dark" style="color:#39d6dc;border-radius: 25px;font-weight: 600;">Send Messages <i
                            class="mdi mdi-send ms-1"></i></button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>