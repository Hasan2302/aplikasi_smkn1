<!DOCTYPE html>
<html>
<head>
	<title>SMK INDONESIA</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
<nav>
	<h1>SMK INDONESIA</h1>
</nav>
<a href="home.php"><input type="button" value="Home" class="cardnav"></a>
<a href="data_siswa.php"><input type="button" value="Data siswa" class="cardnav"></a>
<a href="data_guru.php"><input type="button" value="Data guru" class="cardnav"></a>
<div class="formcard44">
	<h1>TAMBAH NILAI</h1>
	<form action="aksitambah_nilai.php" method="POST">	
			<label>ID NILAI</label><br>
			<input type="text" name="id_nilai"><br>
			<label>KODE GURU</label><br>
			<input type="text" name="kode_guru"><br>
			<label>ID MAPEL</label><br>
			<input type="text" name="id_mapel"><br>
			<label>ID KELAS</label><br>
			<input type="text" name="id_kelas"><br>
			<label>ID PRODI</label><br>
			<input type="text" name="id_prodi"><br>
			<label>NIS SISWA</label><br>
			<input type="text" name="nis_siswa"><br>
			<label>NILAI UH</label><br>
			<input type="text" name="uh"><br>
			<label>NILAI UTS</label><br>
			<input type="text" name="uts"><br>
			<label>NILAI UAS</label><br>
			<input type="text" name="uas"><br>

			<input type="submit" value="OK">
	</form>	
</div>
</body>
<footer><h3>footer</h3></footer>
</html>