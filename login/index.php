<?php
    session_start();
 
?>
<?php
                include "koneksi.php";
				date_default_timezone_set("Asia/Jakarta");
                if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    // return var_dump($username);
                    $password = md5($_POST["pass"]);
					$joinlogin = $_POST['jam_masuk'];
                    $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username' and password ='$password'");
					$query = mysqli_query($conn, "UPDATE user SET jam_masuk ='$joinlogin' WHERE username='$username' and password='$password'");
                    // return var_dump($cek_user);
                    $row      = mysqli_num_rows($cek_user);
            

                    if ($row == 1) {
                        $fetch_pass = mysqli_fetch_assoc($cek_user);
                        //var_dump($fetch_pass);
                        //return false;
                        $cek_pass = $fetch_pass['password'];
                        if ($cek_pass != $password) {
                            echo "<script>alert('password salah');</script>";
                        } else {
                            $_SESSION['log'] =  $fetch_pass ;
                            $_SESSION['username'] = $username ;
							if($query){}
                            echo "<script>alert('login Berhasil');document.location.href='admin.php';</script>";
                        }
                    } else {
                    
                        echo "<script>alert('email/password salah');</script>";
                    }
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
		<h1>login</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post">
				<input type="hidden" name="jam_masuk" value="<?=date ('Y-m-d H:i')?>">
					<input class="text email" type="text" name="username" placeholder="username" required="yes">
					<input class="text" type="password" name="pass" placeholder="Password" required="">
					<input type="submit" value="LOGIN" name="login">
				</form>
				<p>Don't have an Account? <a href="registrasi.php"> Register Now!</a></p>
			</div>
		</div>
		
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