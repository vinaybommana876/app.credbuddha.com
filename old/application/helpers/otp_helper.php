<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_one_time_password')){
    function send_one_time_password($otp,$mobile_number)
	{
	    $sms= "Hello! Your OTP for mobile number verification is: ".$otp.". Please enter this code within the next 15 minutes to complete verification process. Thank you! Intxm";
	    $smsmessage=urlencode($sms);
		$smsapi = "http://nimbusit.info/api/pushsms.php?user=106790&key=010YHLJ00NLV9JKXjjH2&sender=INTXMM&mobile=".$mobile_number."&text=".$smsmessage."&entityid=1701167272475191047&templateid=1107169519916845637";
		return file_get_contents($smsapi);
	}
}