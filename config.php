<?php
	session_start();

	require "vendor/autoload.php";

	$FB = new Facebook\Facebook([
	    'app_id' => '',
	    'app_secret' => '',
	    'default_graph_version' => 'v4.0'
	]);

	$helper = $FB->getRedirectLoginHelper();

	$gClient = new Google_Client();
	$gClient->setAuthConfig('credentials.json');
	$gClient->setAccessType('offline'); // offline access
	$gClient->setIncludeGrantedScopes(true); // incremental auth
	$gClient->addScope([Google_Service_Oauth2::USERINFO_EMAIL, Google_Service_Oauth2::USERINFO_PROFILE]);
	$gClient->setRedirectUri("http://localhost/FBGoogleLogin/google-callback.php");
	
?>
