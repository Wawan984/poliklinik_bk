<?php
	include '../models/login.php';
	if (isset($_SESSION['username'])) {
		echo "<script>document.location = '../index.php'</script>";
	}else{

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.css">
</head>
<body>
	<div class="kotak">
		<h1 style="color: #ffffff;">Form Login</h1>
		<form action="../models/login.php" method="POST">
			<input type="text" name="user" placeholder="Username" required="">
			<input type="password" name="pass" placeholder="Password" required="">
			<input type="submit" name="login" value="Masuk" class="btn btn-success" style="margin: 10px 5px;">
		</form>
		<br><center><p style="color: white;">Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
		
	</div>
</body>
</html>
<style type="text/css">
	body{
		background-color: #444444;
		margin: 0px;
		padding: 0px;
	}
	.kotak{
		margin: 100px auto;
		width: 400px;
		height: auto;
		padding: 10px;

	}
	.kotak input[type=text],.kotak input[type=password]{
		width: 100%;
		height: 35px;
		margin: 5px;
		border:1px;
		text-indent: 5px;
		color: #777777;
		border-radius: 3px;
	}
</style>