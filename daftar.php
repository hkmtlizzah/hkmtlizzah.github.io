<!DOCTYPE html>
<?php 

include 'koneksi.php';

error_reporting(0);


?>


<html>
<head>
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
 
	
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">DAFTAR</p>
  <center>
  <img src="image/daftar.png "alt="" width="250" height="250">
  </center>
		<form action="proses-daftar.php" method="post">
			
			<label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">
			
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			
		
			<input type="submit" class="tombol_login" value="Daftar">
 
			<br/>
			<p class=""><font size="2">sudah punya akun ? <a href="login.php">kembali</a>.</font></p>
			
		</form>
		
	</div>
 

</body>
</html>