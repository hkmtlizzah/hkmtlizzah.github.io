<!DOCTYPE html>
<html>
<head>
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
 	
	<div class="kotak_login">
		<p class="tulisan_login">MASUK</p>
		<center>
		<img src="image/masuk.png "alt="" width="250" height="250">
		</center>
		<form action="proses-login.php" method="post">
			
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="Masuk">
 
			<br/>
			<p class=""><font size="2">belum punya akun ? <a href="daftar.php">Daftar</a>.</font></p>
			
		</form>
		
	</div>
 
 
</body>
</html>