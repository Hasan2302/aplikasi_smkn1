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
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<div class="formcard4">
	<h1>TAMBAH DATA SISWA</h1>
	<form action="aksitambah_siswa.php" method="POST">	
			<label>NIS</label><br>
			<input type="text" name="nis_siswa"><br>
			<label>NAMA</label><br>
			<input type="text" name="nama_siswa"><br>
			<label>JK</label><br>
			<input type="text" name="jk_siswa"><br>
			<label>ALAMAT</label><br>
			<input type="text" name="alamat_siswa"><br>

			<input type="submit" value="OK">
	</form>	
</div>
</body>
<footer><h3>footer</h3></footer>
</html>