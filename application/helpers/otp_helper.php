<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// application/helpers/otp_helper.php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_one_time_password')){
    function send_one_time_password($otp, $mobile_number) {
        $sms = " Hello! Your OTP for mobile verification is: ". $otp .". Enter this code within 15 minutes to complete the process. Thank you! -CredBuddha";
        $smsmessage = urlencode($sms);
        $smsapi = "http://nimbusit.info/api/pushsms.php?user=106790&key=010YHLJ00NLV9JKXjjH2&sender=CREBUD&mobile=".$mobile_number."&text=".$smsmessage."&entityid=1701167272475191047&templateid=1107171497659988831";
        return file_get_contents($smsapi);
    }
}
