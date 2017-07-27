<?php

//If the form is submitted
if(isset($_POST['submit'])) {
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$get_name = trim($_POST['name']);
	}
	//Check to make sure that the name field is not empty
	if(trim($_POST['email']) == '') {
		$hasError = true;
	} else {
		$get_email = trim($_POST['email']);
	}
	//Check to make sure that the name field is not empty
	if(trim($_POST['company']) == '') {
		$hasError = true;
	} else {
		$get_company = trim($_POST['company']);
	}
	//Check to make sure that the name field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$get_phone = trim($_POST['phone']);
	}
	//Check to make sure that the name field is not empty
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		$get_message = trim($_POST['message']);
	}
	
	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo =  "info@sonarplatform.com,amien.krisna@sonarplatform.com"; //Put your own email address here
		$body = "
		<div  style='font-family:arial; font-size:14px; color:#666; background:#eee; padding:15px; border-radius:10px; display:inline-block;'>
		<table width='400' border='0' cellspacing='0' cellpadding='5'>
		  <tr>
		    <td style='border-bottom:solid 1px #fff;' colspan='3' valign='top'><a style='text-decoration:none; font-size:30px; color:#3b73c7;' href='http://www.sonarplatform.com/' target='_blank'><img src='http://www.sonarplatform.com/images/logo.png'/></a></td>
	      </tr>
		  <tr>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' width='100' valign='top'>Name</td>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' width='92' valign='top'>".$get_name."</td>
		  </tr>
		  <tr>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' width='100' valign='top'>Email</td>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' valign='top'>".$get_email."</td>
		  </tr>
		  <tr>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' width='100' valign='top'>Company</td>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' valign='top'>".$get_company."</td>
		  </tr>
		  <tr>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' width='100' valign='top'>Phone</td>
			<td style='padding:10px 0; border-bottom:solid 1px #fff' valign='top'>".$get_phone."</td>
		  </tr>
		  <tr>
			<td style='padding:10px 0;' width='100' valign='top'>Notes or Requests</td>
			<td style='padding:10px 0;' valign='top'>".$get_message."</td>
		  </tr>
		</table>
		</div>
		";
		$subject = "Email From ".$get_email."" ;
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		// More headers
		$headers .= 'From: <'.$get_name.'>' . "\r\n";
   		 mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>