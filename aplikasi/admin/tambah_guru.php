<!DOCTYPE html>
<html>
<head>
	<title>Tambah siswa</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data Siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data Guru" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">TAMBAH GURU</h1>
	<form action="aksitambah_guru.php" method="POST">
		<label>KODE GURU</label><br>
		<input type="text" name="kode_guru"><br>
		<label>NAMA</label><br>
		<input type="text" name="nama_guru"><br>
		<label>JK</label><br>
		<input type="text" name="jk"><br>
		<label>ALAMAT</label><br>
		<input type="text" name="alamat"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>