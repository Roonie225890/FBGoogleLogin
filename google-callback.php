<?php
	require_once "config.php";

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	//https://api.kdyby.org/class-Google_Service_Oauth2.html
	$userData = $oAuth->userinfo_v2_me->get();
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['name'] = $userData['name'];
	$_SESSION['gender'] = $userData['gender'];


	header('Location: googleProfile.php');
	exit();
?>
