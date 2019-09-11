<?php
	session_start();

	require "vendor/autoload.php";

	$FB = new Facebook\Facebook([
	    'app_id' => '1327405310767128',
	    'app_secret' => '2e40ddc68857112c4f64866e8489031c',
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
