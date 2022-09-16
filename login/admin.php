<?php
    session_start();
    if (!isset($_SESSION['log'])){
      header("Location: index.php");
      exit;
  }
  

?>
<?php             
include "koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$username =$_SESSION['username'];

$sql = "SELECT * FROM user WHERE email ='$username'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (isset($_POST['chekout'])) {
	$keluarlogin =$_POST['jam_keluar'];
	
	mysqli_query($conn, "UPDATE user SET jam_keluar ='$keluarlogin' WHERE username ='$username'");
	echo "<script> alert('Anda berhasil keluar');document.location.href='logout.php';</script>";	
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <h1>Nama : Ahmad Daniyal Fayyadh</h1>
    <h1>NIM : 20051397037</h1>
    <h1>Jurusan : Teknik Informatika</h1>
    <form method="post">
      <input type="hidden" name="jam_keluar" value="<?=date ('Y-m-d H:i')?>">
      <input type="submit" name="chekout" value="Logout">
		</form>
  </body>
</html>