<?php
require_once "smtp/SMTPMailer.php";
class Mailer extends SMTPMailer{
	var $headers;
	var $subject;
	var $message;
	var $from;
	var $to;
	function Mailer(){
		$this->setDefaultHeaders();
	}
	function setDefaultHeaders(){
		global $CONFIG;
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-Type: text/html". "\r\n".
                   //"Content-Transfer-Encoding: 7bit". "\r\n";
		//$headers .= "List-Unsubscribe: <mailto:".$CONFIG['MAIL_UNSUBSCRIBE'].">\r\n";
		$headers .= "X-campaignID: ".base64_encode(date("YmdHis"))."\r\n";
		//$headers .= "Message-ID: <".date("YmdHis").".mailer@".$CONFIG['MAILER'].">\r\n";
		$this->headers = $headers;
	}
}
?>