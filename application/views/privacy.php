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
    <title>Credbuddha | Privacy & Policy</title>

    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
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
                                <a href="<?php echo base_url(); ?>index.php" class="nav-link dropdown-toggle active">Home</a>
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
                                <a href="<?php echo base_url(); ?>creditscore" class="nav-link">Free Credit score</a>

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

    <!-- Privacy Title Section Start -->
    <div class="privacy-title">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="title-text text-center">
                    <h2>Privacy & Policy</h2>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                        <li>
                            Privacy & Policy
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Title Section End -->

    <!-- Privacy Section Start -->
    <div class="privacy-section pt-100">
        <div class="container">
            <section class="text">
                <h3 style="color: #000;">Introduction</h3>
                <p class=”para”>Cred Buddha operates under the brand name “Cred Buddha ” (hereinafter referred to as the
                    "Company" or “We” or “Us” or “Our”) collects information from the user accounts created by
                    individuals on the Cred Buddha platform. It also collects
                    data from other digital sources of information relating to such individuals (each a “User”) as set
                    out herein. Cred Buddha uses the information to undertake, and accounts each Users’ credit
                    worthiness which in turn may enable such
                    Users to make applications for one or more credit facilities (each a “Application for Credit”) to
                    credit providing financial institutions affiliated with Cred Buddha (referred as “Cred Buddha
                    Partner”). Each of the credit worthiness
                    assessment and the application for a credit facility form the part of services offered by Cred
                    Buddha to Users and Cred Buddha Partners (individually and collectively the “Services”). The Company
                    collects information from users at
                    the time of account creation as well as an on-going basis from their emails, text messages, mobile
                    phone address book, social media profiles and such other sources as authorized by the users and
                    mingles it to create unique profiles
                    for individuals that it uses in conjunction with proprietary algorithms to determine whether or not
                    a particular individual should be offered the Service. We also provide risk evaluation and
                    management services to the Cred Buddha
                    Partners. </p>
                <p class=”para”>The Service also relies on other factors such as the amount/limit of credit facility
                    (“Advance”) sought and other parameters/requirements set out by Cred Buddha Partners including their
                    credit eligibility parameters. Kindly, note that
                    all individuals whose information is collected by the Company will not be offered the Credit
                    Facility of the Service because the Service provides a dynamic evaluation of risk. Hence, the
                    Company or the Cred Buddha Partner independently
                    may evaluate an individuals’ application and may allow him/her to submit an Application for Credit
                    for a sum up to a specified credit limit, unique to that individual basis his credit analysis, to a
                    Cred Buddha Partner but disallow
                    submission of Application for Credit to another Cred Buddha Partner. Each offer of Service made by
                    the Company is based on the Company’s proprietary and discretionary decision-making methodologies
                    and also relies on the credit risk
                    requirements specified by a Cred Buddha Partner. </p>
                <p class=”para”>The Company values your privacy and is committed to ensuring that you are aware of how
                    your information is being used. The Company actively seeks to minimize the manual interventions and
                    review of data as the Company wants to offer the
                    Service in a real-time online environment with the parameters including, but not limited to the
                    Company’s servers and your internet amongst others. Therefore, while the Company does not rule out
                    the possibility that your information
                    stored in the Company’s database will be accessed and reviewed by an employee or contractor of the
                    Company in the performance of their official duties, your information will mostly be accessed,
                    reviewed, analysed and modified by the
                    Company’s computer programs, API or APKs. The Company will make reasonable efforts to ensure that
                    human access to your information is stored in the Company’s databases is limited to that necessary
                    for servicing your account following
                    your requests from time to time. </p>
                <p class=”para”>The Company will collect, store and use your information only for providing the services
                    to you as permitted by applicable law, to offer certain services to the Cred Buddha Partners
                    concerning their transactions with you. </p>
                <p class=”para”>This Privacy Policy endeavours to inform you of the types of information that may be
                    collected, and know-how such information is collected, used, processed, disclosed and maintained.
                    This Privacy Policy must be read in conjunction with
                    the Terms of Service, Terms of Use and any other terms and conditions about the Service that may be
                    set out by the Company on its Website. </p>
                <p class=”para”>Please read and understand this Privacy Policy carefully. Your installation of the Cred
                    Buddha mobile application and/or use or access of the Services shall constitute your agreement to
                    this Privacy Policy. If you do not agree with our
                    policies and our practices as described in this Privacy Policy, your choice is to not use the
                    Services. You will always have the ability to opt-in and opt-out of the Service by sending us a
                    request at CredBuddha.com However, the Company
                    will retain certain of your information to the extent required to maintain a “Do Not Contact/Do Not
                    Offer” list. </p>
                <p class=”para”>BY ACCEPTING THE PRIVACY POLICY, YOU EXPRESSLY CONSENT TO COMPANY’S COLLECTION,
                    RETENTION, ANALYSIS, USE AND DISCLOSURE OF YOUR PERSONAL INFORMATION FOLLOWING THIS PRIVACY POLICY.
                </p>
                <h3>Applicability of the Privacy Policy</h3>
                <p class=”para”>This Privacy Policy shall apply to all information the Company collects either from you
                    or the Cred Buddha Partner(s). The information the Company collects for the provision of Services
                    are as follows: </p>
                <p class=”para”>Contact or Identification Information This includes but is not limited to your name,
                    email, phone number, passport number or other similar heads of information that allow us to
                    accurately identify you. </p>
                <p class=”para”>Transaction Information This includes information such as historical data of your
                    transactions with the Cred Buddha Partner, including the total number of Advance(s) availed, the
                    total outstanding in a specific or across all the Advance(s)
                    availed by you, the repayment schedule and the amount(s) repaid by you to the Cred Buddha Partner(s)
                    as well as your consumption habits, items purchased, rides taken, tickets purchased, items you have
                    selected for purchase, method
                    of payment used or other similar heads of information based on the information stored on your mobile
                    phone and other digital sources of Information that you provided the Company with access to. This
                    information is collected to allow
                    the Company to understand your transactional activity which in turn informs and allows the Company
                    to refine the credit risk assessment associated with You. </p>
                <p class=”para”>Personal & Device Information Cred Buddha will collect Name, phone number, email ID,
                    PAN, date of birth, pin code, nature of employment and name of employer, monthly income, marital
                    status and relationship with the co-applicant (in case
                    the loan is being sought by more than a single applicant). We or our Lending Partner may require you
                    to share further information on a later date to confirm the veracity of your information or pursuant
                    to any additional features added
                    to the App.We may collect certain user documents and certain information about your mobile or
                    computing device, communication device, browser information, IP address including, for example, the
                    hardware model, operating system and
                    version, software and file names and versions, preferred language, unique device identifier,
                    advertising identifiers, serial number, device motion information, and mobile network information or
                    other similar heads of information that
                    allow us to accurately identify you. We may collect certain documents of the users and certain
                    information about user mobile or computing device, communication device, browser information, IP
                    address including, for example, the hardware
                    model, operating system and version, software and file names and versions, preferred language,
                    unique device identifier, advertising identifiers, serial number, device motion information, and
                    mobile network information or other similar
                    heads of information that allow us to accurately identify you. We may also collect specific types of
                    information stored in the devices of the User, that enable the App and its Services; For Enabling
                    Customer Support; For Research and
                    Development; For Enabling Communications Between You and Us; For enabling Marketing and Outreach;
                    For Automated Decisions; For Legal Compliance and Requirements. </p>
                <p class=”para”>Financial and KYC Information: For undertaking any financial transaction through Cred
                    Buddha , you agree and acknowledge that, we may undertake customer due diligence measures and seek
                    mandatory information required for KYC purpose which
                    as a customer you are obliged to give in order to avail such services. You agree and acknowledge
                    that Cred Buddha can undertake enhanced due diligence measures (including any documentation), to
                    satisfy itself relating to customer
                    due diligence requirements in line with the requirements and obligations. We and our Lending Partner
                    collect the data you provide when you accept the tentative terms of the loans. This includes your
                    photograph, Aadhaar Number, PAN,
                    parents’ names, bank account number, IFSC, proof of address (which can be your electricity bill,
                    rental/lease agreement, gas bill, passport or driver’s license, or voter’s identity card or any
                    other document our App may be able to
                    record).We may require one time access to camera and microphone and location or any other facility
                    for onboarding and KYC purposes only with the explicit consent of the user . </p>
                <p class=”para”>Cred Buddha app also allow the user to identify the right jobs which are matching with
                    the user profile. By uploading the Text/Video profile, users will be allowed to use the service with
                    no cost. </p>
                <p class=”para”>Card and Financial Information For the provision of services, we will collect the
                    following types of banking information from you, credit/debit card details such as the first six or
                    the last four digits of your card number, wallet information
                    (if you have a wallet with us), card details for quick purchase where you have selected the
                    preference of letting us store information. However, for the avoidance of doubt, we would like to
                    clarify that, we do not store or process
                    information necessary to make online payments such as all the digits of a credit card number/bank
                    account number, CVV numbers, one-time PIN numbers and similar payment authentication information.
                    However, do note that such information
                    may be collected, stored and used by the payment gateway service provider you choose to complete
                    your transaction with. All such information will be subject to and processed following the payment
                    gateway service provider’s terms and
                    conditions.
                <p class=”para”>All of the above information is collectively referred to as “User Information”. This
                    Privacy Policy does not apply to, nor does the Company take any responsibility for, any information
                    that is collected by including but not limited
                    to any Cred Buddha Partner or any third party during Your use of the Services, or through any links
                    you click and view during your use of the Services or through any of the advertisements on the
                    Website/Application or through
                    BOTS. </p>
                <p class=”para”>If you transact with multiple Partners of Cred Buddha or receive multiple credit
                    facilities from a specific Cred Buddha Partner, we may collate and merge all the information we
                    receive from all such Cred Buddha Partners to create
                    a single profile to help provide you with better Services. The deletion/removal of your information
                    by you from one Cred Buddha Partner’s database does not constitute the removal or deletion of your
                    information from the Company’s
                    Services. </p>
                <p class=”para”>Credit Report & Communication By accepting this Privacy Policy, you hereby authorise us/
                    our Partners (Lenders) to obtain your Credit Report from Credit Bureau or any other agencies
                    authorised by Reserve Bank of India (“RBI”) in this
                    behalf that hold credit history or related information and also give us/our partners (Lenders) the
                    right to use your credit report, social media proﬁle/content, cell phone data and employment data
                    for authentication, credit scoring
                    and credit decision purposes from time to time. Further, you hereby authorise us / our Partners
                    (“Lenders”) to send both promotional and transactional communication. </p>
                <p class=”para”>Usage and Preference Information We may collect information on your use of our Services,
                    and any settings and preferences selected. We may also assign you with unique identifiers to enable
                    us to identify you, each time you access the
                    Services. This information shall not be deleted from our servers if you decide to discontinue using
                    our Services, as it shall be the basic data with which we identify you and will be needed to ensure
                    that your other information
                    is not stored or analysed by Us when you transact with one or more Cred Buddha Partners. </p>
                <h3>Manner of Collection of Information: </h3>
                <p class=”para”>You understand that the User Information collected by the Company, may be collected
                    including but not limited to under the following methods:</p>
                <ul>
                    <li>When you register with the Company by setting up a user account.</li>
                    <li>Through your transactions with any of the Cred Buddha Partners.</li>
                    <li>Directly through user input.</li>
                    <li>Through your usage of the services.</li>
                    <li>Through automatic tracking of your usage of the website at CredBuddha.com (hereinafter
                        “website/Website”) or any web/mobile application of Cred Buddha at [approve a link to the mobile
                        Application] (hereinafter “Application/App/Mobile
                        App”) or Cred Buddha Partner.</li>
                    <li>Through access you provide the company with to applications on your smartphone or tablet.</li>
                    <li>Through the use of cookies and other tracking technologies.</li>
                    <li>Cred Buddha uses analytics tools to improve customer experience such as tune.inc to track user
                        activity, page content, click/touch, movement, ease of use of site interface, scroll on the
                        website. Your personal information is never
                        stored or shared with any of these third-party tools. The collection of data may in most cases
                        be automatic. </li>
                </ul>
                <h3>COOKIE POLICY :</h3>
                <p class=”para”>"Cookies" are files or software that would be placed in your computer system’s hard
                    drive and browser and are intended to improve your experience when you use Services, by enabling the
                    Company to track your usage and preferences. These
                    cookies may track your usage of the Services, advertisements and links that you visit and other User
                    Information. Most cookies the Company uses are for tracking user preferences while the user is
                    visiting the website. It is recommended
                    that you accept the cookies. You may also provide information to be published, displayed, posted, or
                    transmitted to other users of the Services. Any such information is posted or transmitted to others
                    at your own risk. Please be
                    aware that the Company cannot control the actions of other users of the Services with whom you may
                    choose to share information with. </p>
                <h3> Use of Your Information</h3>
                <p class=”para”>The information that we collect from you will be used for including but not limited to
                    following purposes:</p>
                <ul>
                    <li>For determining on a dynamic basis, if you should be offered the Service.</li>
                    <li>For the provision of Services inYou may also provide information to be published, displayed,
                        posted, or transmitted to other users of the Services. Any such information is posted or
                        transmitted to others at your own risk. Please
                        be aware that the Company cannot control the actions of other users of the Services with whom
                        you may choose to share information with.cluding the maintenance and continuous improvement of
                        the Services, the refinement of the
                        proprietary methodologies used to power the decision making intrinsic to the Services and for
                        other analytical purposes;</li>
                    <li>To create a single profile on you, based on information received from the activity on your
                        smartphone, your use of the Cred Buddha mobile application and your use of the Services, if made
                        available to you.</li>
                    <li>The development and addition of new features to the Services, including data analysis, testing
                        and other forms of data processing to help optimize the provision of Services.</li>
                    <li>To contact the user via SMS, Email or Call and deliver information, administrative notices,
                        targeted advertisements or promotions and any other communication relevant to your use of the
                        Services and or the interest of the user.</li>
                    <li>By third parties who the Company contracts with to the extent required for the provision of
                        Services to you. If the Company determines that any information you have provided or uploaded
                        violates the terms of this Privacy Policy,
                        the Company has the right, in its absolute discretion, to delete or destroy such information
                        without incurring any liability to you. The Company will not publish, sell or rent your personal
                        information to third parties for
                        their marketing purposes without your explicit consent. The Company will use the information
                        collected primarily to provide the Service. The Company may also allow third parties to provide
                        it with content and advertisements
                        that the Company may display to you based on its analysis of your information.</li>
                </ul>
                <h3>Disclosure of Your information</h3>
                <p class=”para”>The User Information you provide may be disclosed by the Company including but not
                    limited to its agents, employees, subsidiaries and affiliates, or to other third-party service
                    providers of the Company or any government authority
                    or body including but not limited to Reserve Bank of India, the Income Tax department, and any other
                    authority that requires the information for the purposes of operating and maintaining the Company’s
                    platform for the provision
                    of Services in compliance with all applicable laws. Particularly, the Company will disclose the User
                    Information to the Cred Buddha Partner to the extent necessary for such Cred Buddha Partner to
                    process and approve an Application
                    for Credit submitted by you. The Company will comply with requests and directions of such
                    governmental, law enforcement, or regulatory authorities, to which it applies to any applicable law.
                    Such compliance may include providing
                    User Information whether it is personally identifiable information or not, to such agency or
                    authority, with/without prior intimation to You. By providing any information to the Company, you
                    consent to the Company providing such
                    information to any governmental, law enforcement or regulatory authorities who exercise jurisdiction
                    over the Services provided and the Company. The Company owns the sole right to all the market
                    analysis, projections, studies,
                    and user behaviour analytics that it derives from Your individual or collective usage of the
                    Website.</p>
                <h3> Data Security</h3>
                <p class=”para”>The information that you provide, subject to disclosure in accordance with the Company’s
                    Privacy Policy, shall be maintained safely and securely. The Company’s databases and information are
                    stored on secure servers with appropriate
                    firewalls. As a User of the Services, you also have the responsibility to ensure data security. You
                    should use the Services offered responsibly. Do not share your username or password with any third
                    person. You are solely responsible
                    for all acts done under the username you are registered under. Given the nature of internet
                    transactions, the Company does not take any responsibility for the transmission of information over
                    the internet including User Information
                    shared and collected. Any transmission of User Information on the internet is done at your risk. The
                    Company does not take any responsibility for you or any third party circumventing the privacy
                    settings or security measures it
                    has in place or those provided to you during the use of the Services. While the Company will use all
                    reasonable efforts to ensure that the User Information and other information submitted by you is
                    safe and secure, it offers no
                    representation, warranties or other assurances that the security measures are adequate, safe, fool
                    proof or impenetrable. THE WARRANTIES OF THE COMPANY WRT THE WEBSITE, APPLICATION AND THE SERVICES
                    STATE AT OUTSET THAT EACH OF
                    THESE ANY RELATED THERETO ARE ALL PROVIDED ON “AS IS” BASIS.</p>
                <h3> Accessing and Updating Your Information</h3>
                <p class=”para”>You can change, alter or otherwise modify or update certain types of User Information at
                    any time if the information is factually incorrect or has changed by changing the information in
                    your User account or by contacting us. For example,
                    you can ask the Company to update your telephone number or email address. You may also change and/or
                    delete any of the information you have submitted. Do note, however, the Company reserves its rights
                    to retain any information
                    about your usage of the Services and information that you have shared with the Cred Buddha Partners
                    as is necessary to ensure the proper and accurate functioning of the Services. You are not entitled
                    to seek the deletion of the
                    same to the extent that it would affect the ability of the Services to analyse and make
                    recommendations on risk. Such information including your information collected from Cred Buddha
                    Partners may be used by the Company to determine
                    whether or not the Services offered may be availed by you. The Company at its sole discretion may
                    permit or deny the change of any information if it believes the same is required to observe
                    applicable laws.</p>
                <h3> Contracting & Age Restrictions</h3>
                <p class=”para”>The Services provided by the Company or the Cred Buddha Partner (as applicable) are only
                    intended for Users who are persons registered in India, citizens of India, solvent, mentally and fit
                    under all parameters to contract for Services
                    hereunder and 18 years of age or older. If you are not of the requisite age you are not to provide
                    any User Information or other information to the Company. If it comes to the Company’s attention,
                    that any User Information or information
                    shared pertains to an individual under the age of 18 years, such User Information or information
                    will be deleted without notice to you.</p>
                <h3> Amendments to the Privacy Policy</h3>
                <p class=”para”>This Privacy Policy is subject to modification or change at the Company’s sole
                    discretion. All such modification will be made as per the updated RBI guidelines .The effective date
                    of the changes to the Privacy Policy will be announced
                    by a notice announcing the date of the modification on the top part of the page of the Privacy
                    Policy. Cred Buddha shall not be liable to point out or mention the exact changes effected to the
                    Privacy Policy or its linkage to
                    or draft of any other policy. Any modifications to these terms and conditions shall be updated on
                    this page of Cred Buddha with the date of update or the date of last modification. You shall be
                    required to visit this page regularly
                    and acquaint yourself with the modifications to the Privacy Policy from time to time and Cred Buddha
                    is not to be liable to intimate you upon any update or modification of this Privacy Policy.</p>
                <h3>Suggestions and Complaints</h3>
                <p class=”para”>If you wish to place a complaint about privacy requirements or laws, access any of your
                    Information that we hold or would like to correct any errors in your User Information, please
                    contact our Grievance Cell at CredBuddha.com so
                    that we can consider and respond to your request. All requests will be addressed no later than
                    thirty (30) days from the date request.</p>
                <h3>Use of Profile Picture</h3>
                <p class=”para”>When you use our platform, we ask for your profile picture in order to verify the user
                    details. This information is required to access our services without any complications. Our primary
                    goal is to offer you smooth & efficient services
                    which will meet all your needs. More importantly, we do not share your photo with any third-party
                    service provider during your use of the service which ensures the complete safety & security of your
                    personal data. The shared information
                    will remain associated with your Cred Buddha profile until you modify, update or delete it.</p>
                <h3>GRIEVANCE REDRESSAL MECHANISM</h3>
                <p class=”para”>If you have any issue and/or dispute regarding this platform and its usage, please feel
                    free to contact the below email</h5>
                <p class=”para”>Customers are requested to address all their grievances to the Grievance Redressal
                    Officer. The contact details of the Grievance Redressal Officer are:</p>
                <ul>
                    <li> Email: contact@intexmedia.com</li>
                </ul>


            </section>
        </div>
    </div>
    <!-- Privacy Section End -->

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
    </footer>s
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