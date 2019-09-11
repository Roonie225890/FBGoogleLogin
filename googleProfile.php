<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>



	<div class="container" style="margin-top: 100px">

		<div class="row justify-content-center">
			<div class="col-md-4">
				<img src="<?php echo $_SESSION['picture'] ?>">
				<a href="logout.php"class="nav-link" href="">logout</a>
			</div>

			<div class="col-md-8">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['id'] ?></td>

						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['email'] ?></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><?php echo $_SESSION['name'] ?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $_SESSION['gender'] ?></td>
						</tr>



					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
