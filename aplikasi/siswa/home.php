<?php
 include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMK INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<nav>
	<h1>HALAMAN SISWA</h1>
</nav>
<a href="../index.php"><input type="button" value="Back" class="cardnav"></a>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="nilai_siswa.php"><input type="button" value="Nilai siswa" class="cardnav"></a>
<div class="formcard">
	<div class="formcard2">
	<form action="cek_login.php" method="POST">	
			<label>username</label><br>
			<input type="text" name="username"><br>
			<label>password</label><br>
			<input type="password" name="password"><br>

			<input type="submit" value="OK">
			<br>
			<hr>
			<br>
			<img src="../img/RPL.jpg" width="80px" height="80px">
	</form>	
	</div>
</div>
</body>
<footer><h3>footer</h3></footer>
</html>