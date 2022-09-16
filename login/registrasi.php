<?php
include "koneksi.php";
  if(isset($_POST['submit'])){
    $password = md5($_POST["pass"]);
    mysqli_query($conn,"insert into user set username = '$_POST[username]', email = '$_POST[email]', password = '$password'");
    echo "<script type='text/javascript'>alert('Register_Berhasil'); window.location='index.php';</script>";
  }
           
?>
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1> SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="POST">
					<input class="text email" type="text" name="email" placeholder="email" required="yes">
					<input class="text email" type="text" name="username" placeholder="username" required="yes">
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Don't have an Account? <a href="index.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>