<!DOCTYPE html>
<html>
<head>
	<title>tamvah</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
	<h1>smk indonesia</h1>
</nav>
	<a href="index.php"><input type="button" value="Home" class="formcard2"></a>
	<a href="data_guru.php"><input type="button" value="dataguru" class="formcard2"></a>
	<a href="data_siswa.php"><input type="button" value="datasiswa" class="formcard2"></a>
	<a href="nilai_siswa.php"><input type="button" value="nilaisiswa" class="formcard2"></a>
	<a href="galeri.php"><input type="button" value="galeri" class="formcard2"></a>
<div class="formcard">
	<h2>Tambah</h2>
	<hr>
	<br>	
<form action="aksitambahnilai.php" method="POST">
<label>&nbsp;ID NILAI</label>
<input style="border-radius: 5px;" type="text" name="id_nilai" autocomplete="on" required/>
<br>
<label>&nbsp;KODE GURU</label>
<input style="border-radius: 5px;" type="text" name="kode_guru" required/>
<br>
<label>&nbsp;ID MAPEL</label>
<input style="border-radius: 5px;" type="text" name="id_mapel" autocomplete="on" required/>
<br>
<label>&nbsp;ID KELAS</label>
<input style="border-radius: 5px;" type="text" name="id_kelas" required/>
<br>
<label>&nbsp;ID PRODI</label>
<input style="border-radius: 5px;" type="text" name="id_prodi" autocomplete="on" required/>
<br>
<label>&nbsp;NIS SISWA</label>
<input style="border-radius: 5px;" type="text" name="nis_siswa" required/>
<br>
<label>&nbsp;UH</label>
<input style="border-radius: 5px;" type="number" name="uh" autocomplete="on" required/>
<br>
<label>&nbsp;UTS</label>
<input style="border-radius: 5px;" type="number" name="uts" required/>
<br>
<label>&nbsp;UAS</label>
<input style="border-radius: 5px;" type="number" name="uas" autocomplete="on" required/>
<br>
<label>&nbsp;NA</label>
<input style="border-radius: 5px;" type="number" name="na" required/>
<br>
<input id="submit-btn-l" style="margin-left: 65px;" type="submit" name="submit" value="MASUK"/>
<br>
</form>
</div>
</body>
<footer><h3>footer</h3></footer>
</html>