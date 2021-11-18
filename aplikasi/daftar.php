<!DOCTYPE html>
<html>
<head>
	<title>SMK INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="index.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<a href="daftar.php"><input type="button" value="Daftar" class="cardnav"></a>
<div class="formcard4">
	<h1>DAFTAR</h1>
	<form action="aksi_daftar.php" method="POST">	
			<label>USERNAME</label><br>
			<input type="text" name="username"><br>
			<label>PASSWORD</label><br>
			<input type="password" name="password"><br>
			<label>LEVEL</label><br>
			<input type="text" value="3" name="level" readonly=""><br>
			<label>NIS</label><br>
			<input type="text" name="nis"><br>

			<input type="submit" value="OK">
	</form>	
</div>
</body>
<footer><h3>footer</h3></footer>
</html>