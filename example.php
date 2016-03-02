<?php

require_once 'GoogleRecaptcha.php';


Class Example {
	
	public function __construct() {
		$recaptcha = new GoogleRecaptcha;
		$status = $recaptcha->verifyCaptcha($_POST['g-recaptcha-response']);

		if ($status) {
			echo "Captcha was successfull";
		} else {
			echo "Captcha failed";
		}
	}
}

$example = new Example;