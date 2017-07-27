<?php
	
	if (isset($body))
	{
	require("postmark.php");
	
	$postmark = new Postmark("e54ddbbf-beeb-48c4-ba71-7a4d8fb92c03","info@sonarplatform.com","info@sonarplatform.com");
	
	if($postmark->to("amien.krisna@sonarplatform.com")->subject("Web Inquiry")->html_message("".$body."")->send()){
		echo "<br><h4 class='quote'>Thank you for your Inquiry. We will get back to you as soon as possible.</h4><br>";
	} 
}