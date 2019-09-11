<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$redirectURL = "http://localhost/FBGoogleLogin/fb-callback.php";
	$permissions = ['email','user_likes'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
	$gLoginURL = $gClient->createAuthUrl();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">


				<form>
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $gLoginURL ?>';" value="Log In With Google" class="btn btn-danger">
				</form>
			
		</div>
	</div>

</body>
</html>
