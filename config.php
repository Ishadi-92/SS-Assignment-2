<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("337920838897-hm70l5optfd0bsfqe8ocv8sd34sfu1bs.apps.googleusercontent.com");
	$gClient->setClientSecret("q0FkbMrpKUKrWtSrKT_tzOCn");
	$gClient->setApplicationName("SS Assignment OAUTH");
	$gClient->setRedirectUri("http://localhost/SoftwareSec2/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>