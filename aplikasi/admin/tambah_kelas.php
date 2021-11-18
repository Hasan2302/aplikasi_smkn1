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
<a href="data_kelas.php"><input type="button" value="Data Kelas" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">TAMBAH KELAS</h1>
	<form action="aksitambah_kelas.php" method="POST">
		<label>ID KELAS</label><br>
		<input type="text" name="id_kelas"><br>
		<label>NAMA KELAS</label><br>
		<input type="text" name="nama_kelas"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>