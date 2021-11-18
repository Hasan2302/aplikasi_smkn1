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
<a href="data_mapel.php"><input type="button" value="Data Mapel" class="cardnav"></a>
<div class="formcard4">
	<h1 align="center">TAMBAH MAPEL</h1>
	<form action="aksitambah_mapel.php" method="POST">
		<label>ID MAPEL</label><br>
		<input type="text" name="id_mapel"><br>
		<label>NAMA MAPEL</label><br>
		<input type="text" name="nama_mapel"><br>
		<input type="submit" name="submit">
	</form>
</div>
</body>
</html>